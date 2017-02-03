<?php
App::uses('AppController', 'Controller');

class FuncionariosController extends AppController {

  public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');
  public $helpers = array('Js' => array('Jquery'));

  public function participantes() {
		$this->Funcionario->recursive = 0;
    $this->Paginator->settings = $this->paginator_settings;
		$this->set('funcionarios', $this->Paginator->paginate());
		$this->getkeys();
		if($this->request->is('ajax')) {
      $concurso = $this->request->data['Funcionario']['concurso_id'];
      $carreira = $this->request->data['Funcionario']['carreira_id'];
      if(!empty($concurso) && empty($carreira)) {
        $funcionarios = $this->Funcionario->find('all', array('conditions' => 'Funcionario.concurso_id ='. $concurso));
        $this->set(compact('funcionarios'));
        $this->render('lista', 'ajax');
      } elseif( empty($concurso) && !empty($carreira) ) {
        $funcionarios = $this->Funcionario->find('all', array('conditions' => 'Funcionario.carreira_id ='. $carreira));
        $this->set(compact('funcionarios'));
        $this->render('lista', 'ajax');
      } if (!empty($concurso) && !empty($carreira)) {
        $conditions = array( 'conditions' => array(
            'Funcionario.carreira_id' => $carreira, 
            'Funcionario.concurso_id' => $concurso
            )
        );
        $funcionarios = $this->Funcionario->find('all', $conditions);
        $this->set(compact('funcionarios'));
        $this->render('lista', 'ajax');
      } else {
  		 $this->render('lista', 'ajax');
      }
		}
	}

  public function getkeys() {
    $concursos = $this->Funcionario->Concurso->find('list', array('fields' => 'Concurso.data_aprovacao', 'Concurso.id'));
    $carreiras = $this->Funcionario->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id'));
    $this->set(compact('concursos', 'carreiras'));
  }

  public function calendario() {
    $this->getkeys();
  }

  public function index() {
    $this->Funcionario->recursive = 0;
    $this->Paginator->settings = $this->paginator_settings;
    $funcionarios = $this->Funcionario->find('all', array('conditions' => array('delegacao_id not' => false)));
    $this->set('funcionarios', $funcionarios);
  }

  public function detalhes($id = null) {
    if ($this->request->is('ajax')) {
      $this->Funcionario->id = $id;
      if ( $this->Funcionario->exists() ) {
        $funcionario = $this->Funcionario->read();
        $this->set(compact('funcionario'));
        $this->render('detalhes', 'ajax');
      } else {
        $this->render('404', 'ajax');
      }
    }
  }

  protected function getKeysCompany() {

  }

  public function alterar($funcionario_id = null) {
    if ($this->request->is('get')) {
      $this->Funcionario->id = $funcionario_id;
      if ($this->Funcionario->exists($funcionario_id)) {
        $funcionario = $this->Funcionario->read();
        $this->set(compact('funcionario'));
      }
    }
  }

  public function alterarDados($id = null) {
    if ($this->request->is('post')) {
      $this->Funcionario->id = $id;
      if($this->Funcionario->exists()) {
        if ($this->Funcionario->save($this->request->data)) {
          $funcionario = $this->Funcionario->read();
          $this->set(compact('funcionario'));
          $this->render('sucesso', 'ajax');
        } else {
          $this->render('erro', 'ajax');
        }
      }
    }
  }

  public function transferencia() {
   $employee = $this->Funcionario->find('list', array('fields' => 'Funcionario.nome', 'Funcionario.id'));
   $this->set(compact('employee'));
  }

}

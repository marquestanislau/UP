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
    $this->set('clazzes', $this->Funcionario->Clazze->find('list', array('fields' => 'Clazze.nome', 'Clazze.id')));
    $delegacaos = $this->Funcionario->Delegacao->find('list', array('fields' => 'Delegacao.nome', 'Delegacao.id'));
    $categorias = $this->Funcionario->Categoria->find('list', array('fields' => 'Categoria.nome', 'Categoria.id'));
    $this->set(compact('concursos', 'carreiras', 'delegacaos', 'categorias'));
  }

  public function calendario() {
    $this->getkeys();
  }

  public function index() {
    $this->Funcionario->recursive = 0;
    $this->Paginator->settings = $this->paginator_settings;
    $funcionarios = $this->Funcionario->find('all', array('conditions' => array('despacho not' => false)));
    $this->set('funcionarios', $funcionarios);
    if($this->request->is('ajax'))
      $this->render('lista', 'ajax');
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
    $this->getKeys();
  }

  public function novoNome($id = null) {
    $this->Funcionario->id = $id;
    $funcionario = $this->Funcionario->read();
    if($this->request->is('ajax')) {
      $this->set(compact('funcionario'));
      $this->render('nome', 'ajax');
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


  /*Para chamar via ajax a lista que contem todos participantes*/
  public function listaDeParticipantesAjax() {
    $this->Funcionario->recursive = 0;
    $this->Paginator->settings = $this->paginator_settings;
    $funcionarios = $this->Paginator->paginate();

    if($this->request->is('ajax')){
      $this->set(compact('funcionarios'));
      $this->render('lista', 'ajax');
    }
  }

  /*Vai receber um $id pelo method post, para verificar a existencia do Funcionario ;)*/
  public function aceitarDespacho() {
      if($this->request->is('ajax')) {
        $id = $this->request->data['Funcionario']['id'];
        if (!empty($id)) {
          $this->Funcionario->id = $id;
          if ($this->Funcionario->save($this->request->data)) {
              $this->render('sucesso', 'ajax');
          } else {
              $this->render('erro', 'ajax');
          }
        }
      }
  }

  public function transferencia() {
   $employees = $this->Funcionario->find('list', array('fields' => 'Funcionario.nome', 'Funcionario.id', 'conditions' => array('delegacao_id not' => false)));
   $delegacoes = $this->Funcionario->Delegacao->find('list', array('fields' => 'Delegacao.nome', 'Delegacao.id'));

   $this->set(compact(array('employees', 'delegacoes')));
  }

  public function entrevista() {

  }

  public function imprimeFuncionario($id = null) {
    $this->Funcionario->id = $id;
    $funcionario = $this->Funcionario->read();
    $this->set(compact('funcionario'));
  }

  public function nomeacao($id = null) {
    $this->Funcionario->id = $id;
    $funcionario = $this->Funcionario->read();
    $this->set(compact('funcionario'));
  }

  public function excepcao() {
    $this->getkeys();
    if($this->request->is('ajax')) {
      $clazzes = $this->Funcionario->Clazze->find('list', array('conditions' => array('carreira_id' => $this->request->data['Funcionario']['carreira_id']), 'fields' => array('Clazze.id', 'Clazze.nome')));
      $this->set(compact('clazzes'));
      $this->render('input_classe', 'ajax');
    }
  }

}

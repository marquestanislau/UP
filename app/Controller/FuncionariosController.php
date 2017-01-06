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

}

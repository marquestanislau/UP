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
			$this->render('lista', 'ajax');
		}
	}

  public function getkeys() {
    $concursos = $this->Funcionario->Concurso->find('list', array('fields' => 'Concurso.data_aprovacao', 'Concurso.id'));
    $carreiras = $this->Funcionario->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id'));
    $this->set(compact('concursos', 'carreiras'));
  }

}

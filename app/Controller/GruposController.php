<?php
App::uses('AppController', 'Controller');
/**
 * Grupos Controller
 *
 * @property Grupo $Grupo
 * @property PaginatorComponent $Paginator
 */
class GruposController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js' => array('Jquery'));

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler');


	public function add() {
		if ($this->request->is('ajax')) {
			if ($this->Grupo->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}

	public function edit($id) {
		if ($this->request->is('ajax')) {
			$this->Grupo->id =  $id;
			if ($this->Grupo->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}

	public function index() {
		$this->set('grupos', $this->Grupo->find('all'));
		if ($this->request->is('ajax')) {
			$this->render('grupos', 'ajax');
		}

	}

	public function beforeFilter() {
		$this->Auth->allow();
	}

	public function delete($id = null) {
		if ($this->request->is('post')) {
			$this->Grupo->id = $id;
			if (!$this->Grupo->exists()) {
				throw new NotFoundException(__('Grupo invalido'));
			}
			$this->Grupo->delete();
			$this->redirect('index');
		}
	}

}

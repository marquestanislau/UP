<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

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
			if ($this->Group->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}

	public function edit($id) {
		if ($this->request->is('ajax')) {
			$this->Group->id =  $id;
			if ($this->Group->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}

	public function index() {
		$this->set('grupos', $this->Group->find('all'));
		if ($this->request->is('ajax')) {
			$this->render('grupos', 'ajax');
		}

	}

	public function beforeFilter() {
		$this->Auth->allow();
	}

	public function delete($id = null) {
		if ($this->request->is('post')) {
			$this->Group->id = $id;
			if (!$this->Group->exists()) {
				throw new NotFoundException(__('Group invalido'));
			}
			$this->Group->delete();
			$this->redirect('index');
		}
	}

}

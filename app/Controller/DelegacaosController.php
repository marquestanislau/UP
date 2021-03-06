<?php
App::uses('AppController', 'Controller');
/**
 * Delegacaos Controller
 *
 * @property Delegacao $Delegacao
 * @property PaginatorComponent $Paginator
 */
class DelegacaosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash', 'RequestHandler');
	public $helpers = array('Js' => array('Jquery'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Delegacao->recursive = 0;
		$this->Paginator->settings = $this->paginator_settings;
		$this->set('delegacaos', $this->Paginator->paginate());
		if($this->request->is('ajax')) {
			$this->render('delegacoes', 'ajax');
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Delegacao->exists($id)) {
			throw new NotFoundException(__('Invalid delegacao'));
		}
		$options = array('conditions' => array('Delegacao.' . $this->Delegacao->primaryKey => $id));
		$this->set('delegacao', $this->Delegacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('ajax')) {
			$this->Delegacao->create();
			if ($this->Delegacao->save($this->request->data)) {
					$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Delegacao->exists($id)) {
			throw new NotFoundException(__('Invalid delegacao'));
		}
		if ($this->request->is(array('post', 'put', 'ajax'))) {
			if ($this->Delegacao->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		} else {
			$options = array('conditions' => array('Delegacao.' . $this->Delegacao->primaryKey => $id));
			$this->request->data = $this->Delegacao->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Delegacao->id = $id;
		if (!$this->Delegacao->exists()) {
			throw new NotFoundException(__('Invalid delegacao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Delegacao->delete()) {
			$this->Flash->success(__('The delegacao has been deleted.'));
		} else {
			$this->Flash->error(__('The delegacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

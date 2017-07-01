<?php
App::uses('AppController', 'Controller');
/**
 * Carreiras Controller
 *
 * @property Carreira $Carreira
 * @property PaginatorComponent $Paginator
 */
class CarreirasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');
	public $helpers = array('Js' => array('Jquery'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Carreira->recursive = 0;
		$this->set('carreiras', $this->Paginator->paginate());
		if($this->request->is('ajax')) {
			$this->render('carreiras', 'ajax');
		}
	}

	public function relatorio_carreira() {
		$carreiras = $this->Carreira->find('all');
		$this->set(compact('carreiras'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carreira->exists($id)) {
			throw new NotFoundException(__('Invalid carreira'));
		}
		$options = array('conditions' => array('Carreira.' . $this->Carreira->primaryKey => $id));
		$this->set('carreira', $this->Carreira->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carreira->create();
			if ($this->Carreira->save($this->request->data)) {
				$this->Flash->success(__('The carreira has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carreira could not be saved. Please, try again.'));
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
		if (!$this->Carreira->exists($id)) {
			throw new NotFoundException(__('Invalid carreira'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carreira->save($this->request->data)) {
				$this->Flash->success(__('The carreira has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carreira could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carreira.' . $this->Carreira->primaryKey => $id));
			$this->request->data = $this->Carreira->find('first', $options);
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
		$this->Carreira->id = $id;
		if (!$this->Carreira->exists()) {
			throw new NotFoundException(__('Invalid carreira'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carreira->delete()) {
			$this->Flash->success(__('The carreira has been deleted.'));
		} else {
			$this->Flash->error(__('The carreira could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function adicionarCarreira() {
		if($this->request->is(array('ajax', 'post'))){
			$this->Carreira->Create();
			if($this->Carreira->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}

	public function configurarCarreiras() {
		if($this->request->is('ajax')) {
			if($this->Carreira->saveAll($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}
}

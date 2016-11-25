<?php
App::uses('AppController', 'Controller');
/**
 * Concursos Controller
 *
 * @property Concurso $Concurso
 * @property PaginatorComponent $Paginator
 */
class ConcursosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	public $helpers = array('Js' => array('Jquery'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Concurso->recursive = 0;
		$this->set('concursos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Concurso->exists($id)) {
			throw new NotFoundException(__('Invalid concurso'));
		}
		$options = array('conditions' => array('Concurso.' . $this->Concurso->primaryKey => $id));
		$carreiras = $this->Concurso->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id'));
		$this->set('concurso', $this->Concurso->find('first', $options));
		$this->set(compact('carreiras'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Concurso->create();
			if ($this->Concurso->saveAll($this->request->data)) {
				$this->Flash->success(__('The concurso has been saved.'));
				debug($this->request->data);
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The concurso could not be saved. Please, try again.'));
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
		if (!$this->Concurso->exists($id)) {
			throw new NotFoundException(__('Invalid concurso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Concurso->save($this->request->data)) {
				$this->Flash->success(__('The concurso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The concurso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Concurso.' . $this->Concurso->primaryKey => $id));
			$this->request->data = $this->Concurso->find('first', $options);
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
		$this->Concurso->id = $id;
		if (!$this->Concurso->exists()) {
			throw new NotFoundException(__('Invalid concurso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Concurso->delete()) {
			$this->Flash->success(__('The concurso has been deleted.'));
		} else {
			$this->Flash->error(__('The concurso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function incluirCarreira($concurso_id = null) {
		$this->view($concurso_id);
	}
}

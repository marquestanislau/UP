<?php
App::uses('AppController', 'Controller');
/**
 * CarreirasConcursos Controller
 *
 * @property CarreirasConcurso $CarreirasConcurso
 * @property PaginatorComponent $Paginator
 */
class CarreirasConcursosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
	public $helpers = array('Js' => array('Jquery'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CarreirasConcurso->recursive = 0;
		$this->set('carreirasConcursos', $this->Paginator->paginate());
		if ($this->request->is('ajax')) {
			$this->render('index', 'ajax');
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
		if (!$this->CarreirasConcurso->exists($id)) {
			throw new NotFoundException(__('Invalid carreiras concurso'));
		}
		$options = array('conditions' => array('CarreirasConcurso.' . $this->CarreirasConcurso->primaryKey => $id));
		$this->set('carreirasConcurso', $this->CarreirasConcurso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CarreirasConcurso->create();
			if ($this->CarreirasConcurso->save($this->request->data)) {
				$this->Flash->success(__('The carreiras concurso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carreiras concurso could not be saved. Please, try again.'));
			}
		}
		$carreiras = $this->CarreirasConcurso->Carreira->find('list');
		$concursos = $this->CarreirasConcurso->Concurso->find('list');
		$this->set(compact('carreiras', 'concursos'));
	}

	protected function carreirasConcursos() {
		$carreiras = $this->CarreirasConcurso->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id'));
		$concursos = $this->CarreirasConcurso->Concurso->find('list', array('fields' => 'Concurso.nome', 'Concurso.id'));
		$this->set(compact('carreiras', 'concursos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CarreirasConcurso->exists($id)) {
			throw new NotFoundException(__('Invalid carreiras concurso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CarreirasConcurso->save($this->request->data)) {
				$this->Flash->success(__('The carreiras concurso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carreiras concurso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CarreirasConcurso.' . $this->CarreirasConcurso->primaryKey => $id));
			$this->request->data = $this->CarreirasConcurso->find('first', $options);
		}
		$this->carreirasConcursos();
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CarreirasConcurso->id = $id;
		if (!$this->CarreirasConcurso->exists()) {
			throw new NotFoundException(__('Invalid carreiras concurso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CarreirasConcurso->delete()) {
			$this->Flash->success(__('The carreiras concurso has been deleted.'));
		} else {
			$this->Flash->error(__('The carreiras concurso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

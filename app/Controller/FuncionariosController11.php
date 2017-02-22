<?php
App::uses('AppController', 'Controller');
/**
 * Funcionarios Controller
 *
 * @property Funcionario $Funcionario
 * @property PaginatorComponent $Paginator
 */
class FuncionariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Funcionario->recursive = 0;
		$this->set('funcionarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Funcionario->exists($id)) {
			throw new NotFoundException(__('Invalid funcionario'));
		}
		$options = array('conditions' => array('Funcionario.' . $this->Funcionario->primaryKey => $id));
		$this->set('funcionario', $this->Funcionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Funcionario->create();
			if ($this->Funcionario->save($this->request->data)) {
				return $this->flash(__('The funcionario has been saved.'), array('action' => 'index'));
			}
		}
		$carreiras = $this->Funcionario->Carreira->find('list');
		$concursos = $this->Funcionario->Concurso->find('list');
		$delegacaos = $this->Funcionario->Delegacao->find('list');
		$this->set(compact('carreiras', 'concursos', 'delegacaos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Funcionario->exists($id)) {
			throw new NotFoundException(__('Invalid funcionario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Funcionario->save($this->request->data)) {
				return $this->flash(__('The funcionario has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Funcionario.' . $this->Funcionario->primaryKey => $id));
			$this->request->data = $this->Funcionario->find('first', $options);
		}
		$carreiras = $this->Funcionario->Carreira->find('list');
		$concursos = $this->Funcionario->Concurso->find('list');
		$delegacaos = $this->Funcionario->Delegacao->find('list');
		$this->set(compact('carreiras', 'concursos', 'delegacaos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Funcionario->id = $id;
		if (!$this->Funcionario->exists()) {
			throw new NotFoundException(__('Invalid funcionario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Funcionario->delete()) {
			return $this->flash(__('The funcionario has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The funcionario could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}

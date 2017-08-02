<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UsuariosController extends AppController {

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
		$this->Usuario->recursive = 0;
    	$this->Paginator->settings = $this->paginator_settings;
		$this->set('usuarios', $this->Paginator->paginate());
		
		if($this->request->is('ajax')) {
			$this->render('users', 'ajax');
		}
	}

	public function print_users() {
		$usuarios = $this->Usuario->find('all');
		$this->set(compact('usuarios'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if($this->request->is('ajax')) {
			if($this->Usuario->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		} 
		$this->set('ultimoUsuario',
			$this->Usuario->find('first', array('order' => array('Usuario.id' => 'desc'))));
	}

	public function ultimo_user() {
		$this->set('ultimoUsuario',
			$this->Usuario->find('first', array('order' => array('Usuario.id' => 'desc'))));
		if($this->request->is('ajax')) {
			$this->render('ultimo_usuario', 'ajax');
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
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Utilizador invalido!'));
		}
		$this->Usuario->id = $id;
		if ($this->request->is(array('ajax'))) {
			$data = $this->request->data['Usuario'];
			if (!$data['foto_perfil']['name']) {
				unset($data['foto_perfil']);
			}
			if ($this->Usuario->save($data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
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
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Flash->success(__('The usuario has been deleted.'));
		} else {
			$this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function validate_form() {
		if($this->RequestHandler->isAjax()) {
			$this->request->data['Usuario'][$this->request->data['field']] = $this->request->data['value'];
			$this->Usuario->set($this->request->data);
			if($this->Usuario->validates()) {
				$this->autoRender = FALSE;
			} else {
				$erros = $this->validateErrors($this->Usuario);
				$this->set('erros', $erros[$this->request->data['field']]);
			}
		}
	}

	public function login() {
		$this->layout = 'empty';
	}

	public function recuperar() {
		$this->layout = 'empty';
	}
}

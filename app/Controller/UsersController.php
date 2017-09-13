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
class UsersController extends AppController {

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
		$this->User->recursive = 0;
    	$this->Paginator->settings = $this->paginator_settings;
		$this->set('usuarios', $this->Paginator->paginate());
		$this->set('groups',
			$this->User->Group->find('list', array('fields' => 'Group.name', 'Group.id')));
		
		if($this->request->is('ajax')) {
			$this->render('users', 'ajax');
		}
	}

	public function print_users() {
		$usuarios = $this->User->find('all');
		$this->set(compact('usuarios'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function perfil($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('usuario', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if($this->request->is('ajax')) {
			if($this->User->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		} 
	}


	public function ultimo_user() {
		$this->set('ultimoUsuario',
			$this->User->find('first', array('order' => array('User.id' => 'desc'))));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Utilizador invalido!'));
		}
		$this->User->id = $id;
		if ($this->request->is(array('ajax'))) {
			$data = $this->request->data['User'];
			// if (!$data['foto_perfil']['name']) {
			// 	unset($data['foto_perfil']);
			// }
			if ($this->User->save($data)) {
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The usuario has been deleted.'));
		} else {
			$this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function validate_form() {
		if($this->RequestHandler->isAjax()) {
			$this->request->data['User'][$this->request->data['field']] = $this->request->data['value'];
			$this->User->set($this->request->data);
			if($this->User->validates()) {
				$this->autoRender = FALSE;
			} else {
				$erros = $this->validateErrors($this->User);
				$this->set('erros', $erros[$this->request->data['field']]);
			}
		}
	}

	public function login() {
		$this->layout = 'empty';
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash('Senha ou nome do utilizador errado.');
		}
		// if ($this->Session->read('Auth.User')) {
		// 	debug($this->Session->read('Auth.User'));
		// 	$this->Session->setFlash('Bem vindo ao sistema');
		// 	return $this->redirect('/');
		// }
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function recuperar() {
		$this->layout = 'empty';
	}

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function initDB() {
		$group = $this->User->Group;
		// Allow admins to everything
		$group->id = 1;
		$this->Acl->allow($group, 'controllers');
		// allow managers to posts and widgets
		$group->id = 2;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Funcionarios');
		$this->Acl->allow($group, 'controllers/Concursos');
		$this->Acl->allow($group, 'controllers/Pages');
		
		// allow basic users to log out
		$this->Acl->allow($group, 'controllers/users/logout');
		// we add an exit to avoid an ugly "missing views" error message
		echo "all done";
		exit;
	}
}

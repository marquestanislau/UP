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
    
    public $paginator_settings = array(
		'limit' => 10
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usuario->recursive = 0;
        $this->Paginator->settings = $this->paginator_settings;
		$this->set('usuarios', $this->Paginator->paginate());
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
		if($this->request->is('post')) {
			if($this->request->is('ajax')) {
				if($this->Usuario->save($this->request->data)) {
					$this->render('sucesso', 'ajax');
				} else {
					$this->render('erro', 'ajax');
				}
			} else {
				$this->Flash->success(__('Usuario adicionado com exito.'));
				return $this->redirect(array('action' => 'index'));
			}
		}
		$this->set('ultimoUsuario', 
			$this->Usuario->find('first', array('order' => array('Usuario.id' => 'desc'))));
		
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
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data = $this->request->data['Usuario'];
			if (!$data['foto_perfil']['name']) {
				unset($data['foto_perfil']);
			}
			if ($this->Usuario->save($data)) {
				$this->Flash->success(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$usuario = $this->Usuario->find('first', $options);
			$this->request->data = $usuario;
			$this->set('usuario', $usuario);
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
}

<?php
App::uses('AppController', 'Controller');
/**
 * Clazzes Controller
 *
 * @property Clazze $Clazze
 * @property PaginatorComponent $Paginator
 */
class ClazzesController extends AppController {

        public $name = 'Clazzes';

/**
 * Components
 *
 * @var array
 */
	public $components = array(
            	'Paginator',
            	'Session',
            	'Flash',
            	'RequestHandler'
            );

	public $helpers = array('Js'  => array('Jquery'), 'Html');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clazze->recursive = 0;
		$this->set('clazzes', $this->Paginator->paginate());
		$this->setKeys();
		if($this->request->is('ajax')) {
			$this->render('classes', 'ajax');
		}
	}

  public function pdf_classes() {
    ini_set('memory_limit', '512M');
    $clazzes = $this->Clazze->find('all');
    $this->setKeys();
		$this->set(compact('clazzes'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Clazze->exists($id)) {
			throw new NotFoundException(__('Invalid clazze'));
		}
		$options = array('conditions' => array('Clazze.' . $this->Clazze->primaryKey => $id));
		$this->set('clazze', $this->Clazze->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clazze->create();
			if($this->request->is('ajax')) {
				if ($this->Clazze->save($this->request->data)) {
					$this->render('sucesso', 'ajax');
				} else {
					$this->render('erro', 'ajax');
				}
			} else {
				if ($this->Clazze->save($this->request->data)) {
					$this->Flash->success(__('The clazze has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Flash->error(__('The clazze could not be saved. Please, try again.'));
				}
			}
		}
		$this->setKeys();
	}

        protected function setKeys() {
            $carreiras = $this->Clazze->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id'));
            $this->set(compact('carreiras'));
        }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Clazze->exists($id)) {
			throw new NotFoundException(__('Invalid clazze'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if($this->request->is('ajax')) {
				if ($this->Clazze->save($this->request->data)) {
					$this->render('sucesso', 'ajax');
				} else {
					$this->render('erro', 'ajax');
				}
			} else {
				if ($this->Clazze->save($this->request->data)) {
					$this->Flash->success(__('The clazze has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Flash->error(__('The clazze could not be saved. Please, try again.'));
				}
			}
		} else {
			$options = array('conditions' => array('Clazze.' . $this->Clazze->primaryKey => $id));
			$this->request->data = $this->Clazze->find('first', $options);
		}
		$this->setKeys();
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Clazze->id = $id;
		if (!$this->Clazze->exists()) {
			throw new NotFoundException(__('Invalid clazze'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Clazze->delete()) {
			$this->Flash->success(__('The clazze has been deleted.'));
		} else {
			$this->Flash->error(__('The clazze could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

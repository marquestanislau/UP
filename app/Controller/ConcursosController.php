<?php
App::uses('AppController', 'Controller');

class ConcursosController extends AppController {

	public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');
	public $helpers = array('Js' => array('Jquery'));


	public function index() {
		//$this->editarModal();
		$this->Concurso->recursive = 0;
		$this->set('concursos', $this->Paginator->paginate());
		if($this->request->is('ajax')) {
			$this->render('concursos', 'ajax');
		}
	}

	public function lista_concursos() {
		$concursos = $this->Concurso->find('all');
		$this->set(compact('concursos'));
	}


	public function view($id = null) {
		if (!$this->Concurso->exists($id)) {
			throw new NotFoundException(__('Invalid concurso'));
		}

		$options = array('conditions' => array('Concurso.' . $this->Concurso->primaryKey => $id));
		$carreiras = $this->Concurso->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id'));

		$concursos = $this->Concurso->find('all', array(
			'contain' => array('Carreira'),
			'conditions' => array('Concurso.id' => $id)
		));
		$this->set(compact('concursos'));
		$this->set('concurso', $this->Concurso->find('first', $options));
		$this->set(compact('carreiras'));

		$this->categoriasParaCombo();
		$this->documentosParaCheckbox();

	}

	protected function categoriasParaCombo() {
		$categorias = $this->Concurso->Carreira->Categoria->find('list',  array('fields' => 'Categoria.nome', 'Categoria.id'));
		$this->set(compact('categorias'));
	}

	protected function documentosParaCheckbox() {
		$documentacaos = $this->Concurso->Carreira->Documentacao->find('list',  array('fields' => 'Documentacao.nome', 'Documentacao.id'));
		$this->set(compact('documentacaos'));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Concurso->create();
			if ($this->Concurso->saveAll($this->request->data)) {
				if($this->RequestHandler->isAjax()) {
					$this->nova_pagina($this->request->data['Concurso']['id']);
				} else {
					$this->Flash->success(__('The concurso has been saved.'));
						// debug($this->request->data);
					return $this->redirect(array('action' => 'view/'.$this->request->data['Concurso']['id']));
				}
			} else {
				$this->Flash->error(__('The concurso could not be saved. Please, try again.'));
			}
		}
	}

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

	public function nova_pagina($id = null) {
		if($this->RequestHandler->isAjax()) {
			$concursos = $this->Concurso->find('all', array(
				'contain' => array('Carreira'),
				'conditions' => array('Concurso.id' => $id)
			));
			$this->set('concursos', $concursos);
			$this->render('carreiras', 'ajax');
		}
	}

	public function editarModal() {
		if($this->request->is('ajax')) {
			if($this->Concurso->save($this->request->data)) {
				$this->autoRender = false;
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		} else {
			if($this->Concurso->save($this->request->data)) {
				$this->Flash->success('Dados submetidos com exito!');
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function adicionarModal() {
		if($this->request->is(array('post', 'ajax'))) {
			$this->Concurso->create();
			if($this->Concurso->save($this->request->data)) {
				$this->render('sucesso', 'ajax');
			} else {
				$this->render('erro', 'ajax');
			}
		}
	}
}

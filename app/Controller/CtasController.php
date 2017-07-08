<?php

App::uses('AppController', 'Controller');

/**
 * Ctas Controller
 *
 * @property Cta $Cta
 * @property PaginatorComponent $Paginator
 */
class CtasController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'RequestHandler');
    public $helpers = array('Js' => array('Jquery'));

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Cta->recursive = 0;
        $this->set('ctas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Cta->exists($id)) {
            throw new NotFoundException(__('Invalid cta'));
        }
        $options = array('conditions' => array('Cta.' . $this->Cta->primaryKey => $id));
        $this->set('cta', $this->Cta->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('ajax')) {
            $this->Cta->create();
            $this->Cta->Funcionario->create();
            if ($this->antesDeSalvar($this->request->data)) {
                if ($this->Cta->saveAssociated($this->request->data)) {
                    $this->request->data = array();
                    $this->render('sucesso', 'ajax');
                } else {
                    $this->render('erro', 'ajax');
                }
            } else {
                $this->render('erro_duplo', 'ajax');
            }
        }
        // $funcionarios = $this->Cta->Funcionario->find('list');
        // $this->set(compact('funcionarios'));
    }

    protected function antesDeSalvar($data) {
        $ctas = $this->Cta->find('all');
        foreach ( $ctas as $cta) {
            if($cta['Funcionario']['nome'] === $data['Funcionario']['nome']
                && $cta['Funcionario']['apelido'] === $data['Funcionario']['apelido']
                && $cta['Funcionario']['contacto_pessoal'] === $data['Funcionario']['contacto_pessoal']
                && $cta['Funcionario']['data_nascimento'] === $data['Funcionario']['data_nascimento']) {
                return false;
            }
        }
        return true;
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Cta->exists($id)) {
            throw new NotFoundException(__('Invalid cta'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Cta->saveAssociated($this->request->data)) {
                $this->Flash->success(__('The cta has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The cta could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Cta.' . $this->Cta->primaryKey => $id));
            $this->request->data = $this->Cta->find('first', $options);
        }
        $funcionarios = $this->Cta->Funcionario->find('list');
        $this->set(compact('funcionarios'));
    }

    /**
     * delete method
     *
     * @throws NotFoundExceptio
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Cta->id = $id;
        if (!$this->Cta->exists()) {
            throw new NotFoundException(__('Invalid cta'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Cta->delete()) {
            $this->Flash->success(__('The cta has been deleted.'));
        } else {
            $this->Flash->error(__('The cta could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}

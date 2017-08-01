<?php

App::uses('AppController', 'Controller');

/**
 * Cds Controller
 *
 * @property Cd $Cd
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class CdsController extends AppController {

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
        $this->Cd->recursive = 0;
        $this->set('cds', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Cd->exists($id)) {
            throw new NotFoundException(__('Invalid cd'));
        }
        $options = array('conditions' => array('Cd.' . $this->Cd->primaryKey => $id));
        $this->set('cd', $this->Cd->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('ajax')) {
            $this->Cd->create();
            $this->Cd->Funcionario->create();
            if(empty( $this->request->data['Funcionario']['categoria_id']))
                $this->request->data['Funcionario']['categoria_id'] = $this->atribuiCategoria($this->request->data);
            if ($this->antesDeSalvar( $this->request->data )) {
                if ($this->Cd->saveAssociated($this->request->data)) {
                    $this->render('sucesso', 'ajax');
                } else {
                    $this->render('erro', 'ajax');
                }
            } else {
                $this->render('erro_duplo', 'ajax');
            }
        }
        // $funcionarios = $this->Cd->Funcionario->find('list');
        // $this->set(compact('funcionarios'));
    }

    protected function antesDeSalvar($data) {
        $cds = $this->Cd->find('all');

        foreach ( $cds as $cd ) {
            if ($cd['Funcionario']['nome'] === $data['Funcionario']['nome']
                    && $cd['Funcionario']['apelido'] === $data['Funcionario']['apelido']
                    && $cd['Funcionario']['email_pessoal'] === $data['Funcionario']['email_pessoal']
                    && $cd['Funcionario']['contacto_pessoal'] === $data['Funcionario']['contacto_pessoal']
                    && $cd['Funcionario']['data_nascimento'] === $data['Funcionario']['data_nascimento']
                    && $cd['Cd']['cadeira'] === $data['Cd']['cadeira']) {

                return FALSE;
            }

        }
        return TRUE;
    }

    private function atribuiCategoria($request = array()) {
        $carreira_id = $request['Funcionario']['carreira_id'];
        // para buscar categorias que contenha as palavras chaves estagiario ou auxiliar para atribuir ao funcionario
        $categorias = $this->Cd->Funcionario->Categoria->find('all', 
                                array(
                                    'conditions' => array(
                                        'Categoria.carreira_id' => $carreira_id,
                                        'OR' => array(
                                              array('Categoria.nome LIKE' => '%stagiário'),
                                              array('Categoria.nome LIKE' => '%stagiario'),
                                              array('Categoria.nome LIKE' => '%uxiliar')
                                          )
                                       
                                        )
                                )
                        );
        $categoria_id = 0;
        if(!empty($categorias))
            $categoria_id = $categorias[0]['Categoria']['id'];
        return $categoria_id;
    }
    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Cd->exists($id)) {
            throw new NotFoundException(__('Invalid cd'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Cd->save($this->request->data)) {
                $this->Flash->success(__('The cd has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The cd could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Cd.' . $this->Cd->primaryKey => $id));
            $this->request->data = $this->Cd->find('first', $options);
        }
        $funcionarios = $this->Cd->Funcionario->find('list');
        $this->set(compact('funcionarios'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Cd->id = $id;
        if (!$this->Cd->exists()) {
            throw new NotFoundException(__('Invalid cd'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Cd->delete()) {
            $this->Flash->success(__('The cd has been deleted.'));
        } else {
            $this->Flash->error(__('The cd could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function excepcao() {
      $this->getkeys();
      if($this->request->is('ajax')) {
        $clazzes = $this->Cd->Funcionario->Clazze->find('list', array('conditions' => array('carreira_id' => $this->request->data['Funcionario']['carreira_id']), 'fields' => array('Clazze.id', 'Clazze.nome')));
        $this->set(compact('clazzes'));
        $this->render('input_classe', 'ajax');
      }
    }

    public function getkeys() {
      $concursos = $this->Cd->Funcionario->Concurso->find('list', array('fields' => 'Concurso.data_aprovacao', 'Concurso.id'));
      $carreiras = $this->Cd->Funcionario->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id', 'conditions' => array('tipo' => 1)));
      $this->set('clazzes', $this->Cd->Funcionario->Clazze->find('list', array('fields' => 'Clazze.nome', 'Clazze.id')));
      $delegacaos = $this->Cd->Funcionario->Delegacao->find('list', array('fields' => 'Delegacao.nome', 'Delegacao.id'));
      $escalaos = $this->Cd->Funcionario->Escalao->find('list', array('fields' => 'Escalao.nome', 'Escalao.id'));
      $sectores = $this->Cd->Funcionario->Sectore->find('list', array('fields' => 'Sectore.designacao', 'Sectore.id'));
      $categorias = $this->Cd->Funcionario->Categoria->find('list', array('fields' => 'Categoria.nome', 'Categoria.id'));
      
      $this->set(compact('concursos', 'carreiras', 'delegacaos', 'escalaos', 'sectores', 'categorias'));
    }

}

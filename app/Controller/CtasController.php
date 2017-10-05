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
        $data = $this->request->data;
        if ($this->request->is('ajax')) {
            $this->Cta->create();
            $this->Cta->Funcionario->create();
            if ($this->antesDeSalvar($data)) {
                $data['Funcionario']['clazze_id'] = $this->classeCorrecta($data);
                if ($this->Cta->saveAssociated($data)) {
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

    protected function classeCorrecta($request = array()) {
        $classe_id = $this->findClazzByClasse($request, 'E');
        if(empty($classe_id)) {
            $classe_id = $this->findClazzByClasse($request, 'U');
        }

        if (empty($request['Funcionario']['clazze_id'])) {
            $request['Funcionario']['clazze_id'] = $classe_id[0]['Clazze']['id'];
            return $request['Funcionario']['clazze_id'];
        }

        return $request['Funcionario']['clazze_id'];
    }

    private function findClazzByClasse($request = array(), $clazze) {
        $a = $this->Cta->Funcionario->Clazze->find('all', 
                            array(
                                'conditions' => array(
                                            'Carreira.id' => $request['Funcionario']['carreira_id'],
                                            'Clazze.nome' => $clazze
                                            )
                                )
                            );
        return $a;
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
        if ($this->request->is('ajax')) {
            $this->Cta->id = $id;
            if ($this->Cta->saveAssociated($this->request->data)) {
                $this->render('sucesso', 'ajax');
            } else {
                $this->render('erro', 'ajax');
            }
        } 
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

    public function excepcao() {
      $this->getkeys();
      if($this->request->is('ajax')) {
        $clazzes = $this->Cta->Funcionario->Clazze->find('list', array('conditions' => array('carreira_id' => $this->request->data['Funcionario']['carreira_id']), 'fields' => array('Clazze.id', 'Clazze.nome')));
        $this->set(compact('clazzes'));
        $this->render('input_classe', 'ajax');
      }
    }

    public function getkeys() {
      $concursos = $this->Cta->Funcionario->Concurso->find('list', array('fields' => 'Concurso.data_aprovacao', 'Concurso.id'));
      $carreiras = $this->Cta->Funcionario->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id', 'conditions' => array('tipo' => 0)));
      $this->set('clazzes', $this->Cta->Funcionario->Clazze->find('list', array('fields' => 'Clazze.nome', 'Clazze.id')));
      $delegacaos = $this->Cta->Funcionario->Delegacao->find('list', array('fields' => 'Delegacao.nome', 'Delegacao.id'));
      $escalaos = $this->Cta->Funcionario->Escalao->find('list', array('fields' => 'Escalao.nome', 'Escalao.id'));
      $sectores = $this->Cta->Funcionario->Sectore->find('list', array('fields' => 'Sectore.designacao', 'Sectore.id'));
      $a = $this->Cta->Funcionario->Clazze->find('all', array('conditions' => array('Carreira.id' => 1, 'Clazze.nome' => 'E')));
      $this->set(compact('concursos', 'carreiras', 'delegacaos', 'escalaos', 'sectores', 'a'));
    }

}

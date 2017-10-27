<?php
App::uses('AppController', 'Controller');

class FuncionariosController extends AppController {

  public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');
  public $helpers = array('Js' => array('Jquery'));

  public function participantes() {
		$this->Funcionario->recursive = 0;
    $this->Paginator->settings = $this->paginator_settings;
		$this->set('funcionarios', $this->Paginator->paginate());
		$this->getkeys();
    if($this->request->is('ajax')) {
      $concurso = $this->request->data['Funcionario']['concurso_id'];
      $carreira = $this->request->data['Funcionario']['carreira_id'];
      if(!empty($concurso) && empty($carreira)) {
        $funcionarios = $this->Funcionario->find('all', array('conditions' => 'Funcionario.concurso_id ='. $concurso));
        $this->set(compact('funcionarios'));
        $this->render('lista', 'ajax');
      } elseif( empty($concurso) && !empty($carreira) ) {
        $funcionarios = $this->Funcionario->find('all', array('conditions' => 'Funcionario.carreira_id ='. $carreira));
        $this->set(compact('funcionarios'));
        $this->render('lista', 'ajax');
      } if (!empty($concurso) && !empty($carreira)) {
        $conditions = array( 'conditions' => array(
            'Funcionario.carreira_id' => $carreira,
            'Funcionario.concurso_id' => $concurso
            )
        );
        $funcionarios = $this->Funcionario->find('all', $conditions);
        $this->set(compact('funcionarios'));
        $this->render('lista', 'ajax');
      } else {
  		 $this->render('lista', 'ajax');
      }
		}
	}

  public function listEmployee() {
    if ($this->request->is('ajax')) {
      $this->set('funcionarios', $this->Funcionario->find('all'));
      $this->render('lista', 'ajax');
    }
  }

  public function getkeys() {
    $concursos = $this->Funcionario->Concurso->find('list', array('fields' => 'Concurso.data_aprovacao', 'Concurso.id'));
    $carreiras = $this->Funcionario->Carreira->find('list', array('fields' => 'Carreira.nome', 'Carreira.id'));
    $this->set('clazzes', $this->Funcionario->Clazze->find('list', array('fields' => 'Clazze.nome', 'Clazze.id')));
    $delegacaos = $this->Funcionario->Delegacao->find('list', array('fields' => 'Delegacao.nome', 'Delegacao.id'));
    $sectores = $this->Funcionario->Sectore->find('list', array('fields' => 'Sectore.designacao', 'Sectore.id'));
    $categorias = $this->Funcionario->Categoria->find('list', array('fields' => 'Categoria.nome', 'Categoria.id'));
    $this->set(compact('concursos', 'carreiras', 'delegacaos', 'categorias', 'sectores'));
  }

  public function calendario() {
    $this->getkeys();
  }

  public function index() {
    $this->Funcionario->recursive = 0;
    $this->Paginator->settings = $this->paginator_settings;
    $funcionarios = $this->Funcionario->find('all', array('conditions' => array('despacho not' => false)));
    $this->set('funcionarios', $funcionarios);
    if($this->request->is('ajax'))
      $this->render('lista', 'ajax');
  }

  // Usado para mandar a lista dos funcionarios para a view que ira transformar a lista em pdf
  public function todos() {
    $this->index();
  }


  public function detalhes($id = null) {
    if ($this->request->is('ajax')) {
      $this->Funcionario->id = $id;
      if ( $this->Funcionario->exists() ) {
        $funcionario = $this->Funcionario->read();
        $this->set(compact('funcionario'));
        $this->render('detalhes', 'ajax');
      } else {
        $this->render('404', 'ajax');
      }
    }
  }
  
  #Metodo responsavel por gerar os dados que serao apresentados 
  #ao utilizador para possivel uso como referencial no ambito estatistico da DRH 
  public function preparaRelatorio() {
    $this->loadModel('Delegacao');
    if ($this->request->is('ajax')) {
        $this->filtroParaRelatorio();
        $this->render('prepara_relatorio', 'ajax');
    } else {
        $this->filtroParaRelatorio();
    }
  }

  private function filtroParaRelatorio() {
    $funcionario_masculino = $this->Funcionario->find('all', array('conditions' => array('sexo' => 'M', 'despacho not' => '')));
    $funcionario_feminino = $this->Funcionario->find('all', array('conditions' => array('sexo' => 'F', 'despacho not' => '')));
    $cta_masculino = $this->Funcionario->Cta->find('all', array('conditions' => array('despacho not' => '', 'sexo' => 'M')));
    $cta_feminino = $this->Funcionario->Cta->find('all', array('conditions' => array('despacho not' => '', 'sexo' => 'F')));
    $cd_masculino = $this->Funcionario->Cd->find('all', array('conditions' => array('despacho not' => '', 'sexo' => 'M')));
    $cd_feminino = $this->Funcionario->Cd->find('all', array('conditions' => array('despacho not' => '', 'sexo' => 'F')));
    $delegacao = $this->Delegacao->find('all');
    $this->set(compact('delegacao','cd_feminino','cd_masculino', 'cta_masculino','cta_feminino', 'funcionario_feminino', 'funcionario_masculino'));
  }

  public function alterar($funcionario_id = null) {
    if ($this->request->is('get')) {
      $this->Funcionario->id = $funcionario_id;
      if ($this->Funcionario->exists($funcionario_id)) {
        $funcionario = $this->Funcionario->read();
        $this->set(compact('funcionario'));
      }
    } else if($this->request->is('post')) {
      // qqfilename, name of the field that contains de file to upload
      $this->saveDocument($funcionario_id, $this->request->data['qqfilename']);
    }
    $this->getKeys();
  }

// Busca pelo funcionario que sera associado ao documento que esta a ser enviado ao servidor
  private function saveDocument($id, $fileName) {
    $this->Funcionario->id = $id;
    $funcionario = $this->Funcionario->read();
    $this->set(compact('funcionario'));
    if (!empty($funcionario)) {
        if ($this->moveToFolder($fileName)) {
          $funcionario['Funcionario']['fileName'] = $fileName;
          if($this->Funcionario->save($funcionario)) {
            $this->render('response', 'ajax');
          } else {
            $this->render('response_error', 'ajax');
          }
        }
    }
  }

// Carrega o ficheiro para a pasta files do cakephp no servidor
  private function moveToFolder($fileName) {
    return move_uploaded_file($_FILES['qqfile']['tmp_name'], WWW_ROOT . 'files' . '/'.$fileName) ? true : false;
  }

  public function novoNome($id = null) {
    $this->Funcionario->id = $id;
    $funcionario = $this->Funcionario->read();
    if($this->request->is('ajax')) {
      $this->set(compact('funcionario'));
      $this->render('nome', 'ajax');
    }
  }

  public function alterarDados($id = null) {
    if ($this->request->is('post')) {
      $this->Funcionario->id = $id;
      if($this->Funcionario->exists()) {
        if ($this->Funcionario->save($this->request->data)) {
          $funcionario = $this->Funcionario->read();
          $this->set(compact('funcionario'));
          $this->render('sucesso', 'ajax');
        } else {
          $this->render('erro', 'ajax');
        }
      }
    }
  }


  /*Para chamar via ajax a lista que contem todos participantes*/
  public function listaDeParticipantesAjax() {
    $this->Funcionario->recursive = 0;
    $this->Paginator->settings = $this->paginator_settings;
    $funcionarios = $this->Paginator->paginate();

    if($this->request->is('ajax')){
      $this->set(compact('funcionarios'));
      $this->render('lista', 'ajax');
    }
  }

  /*Vai receber um $id pelo method post, para verificar a existencia do Funcionario ;)*/
  public function aceitarDespacho() {
      if($this->request->is('ajax')) {
        $id = $this->request->data['Funcionario']['id'];
        if (!empty($id)) {
          $this->Funcionario->id = $id;
          if ($this->Funcionario->save($this->request->data)) {
              $this->render('sucesso', 'ajax');
          } else {
              $this->render('erro', 'ajax');
          }
        }
      }
  }

  public function transferencia() {
   $employees = $this->Funcionario->find('list', array('fields' => 'Funcionario.nome', 'Funcionario.id', 'conditions' => array('delegacao_id not' => false)));
   $delegacoes = $this->Funcionario->Delegacao->find('list', array('fields' => 'Delegacao.nome', 'Delegacao.id'));

   $this->set(compact(array('employees', 'delegacoes')));
  }

  public function entrevista() {

  }

  public function imprimeFuncionario($id = null) {
    $this->Funcionario->id = $id;
    $funcionario = $this->Funcionario->read();
    $this->set(compact('funcionario'));
  }

  public function nomeacao($id = null) {

    $this->Funcionario->id = $id;
    $funcionario = $this->Funcionario->read();

    if (empty($funcionario['Funcionario']['nuit']) || ($funcionario['Funcionario']['nuit'] == 1)) {
        $funcionario['Funcionario']['nuit'] = $this->request->data['Funcionario']['nuit'];
        $funcionario['Funcionario']['despacho'] = $this->request->data['Funcionario']['despacho'];
        $this->Funcionario->save($funcionario);
    }

    $this->set(compact('funcionario'));
  }

  public function excepcao() {
    $this->getkeys();
    if($this->request->is('ajax')) {
      $clazzes = $this->Funcionario->Clazze->find('list', array('conditions' => array('carreira_id' => $this->request->data['Funcionario']['carreira_id']), 'fields' => array('Clazze.id', 'Clazze.nome')));
      $this->set(compact('clazzes'));
      $this->render('input_classe', 'ajax');
    }
  }
//para mostrar a pagina ajax com as combobox preenchidas
  public function busca() {
    if ( $this->request->is('ajax') ) {
      
    }
    $this->getkeys();
  }

  public function findAll() {
    if( $this->request->is('ajax') ) {
      $funcionario = $this->findEmployee($this->request->data);
      if (!empty($funcionario)) {
        $this->set(compact('funcionario'));
        $this->render('funcionario_encontrado', 'ajax');
       } else {
        $this->render('404', 'ajax');
       }
    }
  }

  protected function findEmployee($data = array()) {
    if (!empty($data)) {
      $nome = $data['Funcionario']['nome'];
      $concurso_id = $data['Funcionario']['concurso_id'];
      $carreira_id = $data['Funcionario']['carreira_id'];
      $categoria_id = $data['Funcionario']['categoria_id'];
      $delegacao_id = $data['Funcionario']['delegacao_id'];
      $posicao = $data['Funcionario']['posicao'];

      $funcionario = $this->Funcionario->find('all', 
                          array(
                                 'conditions' => array(
                                    'Funcionario.nome LIKE' => '%'.$nome.'%',
                                    'OR' => array(
                                        array('Funcionario.carreira_id' => $carreira_id),
                                        array('Funcionario.concurso_id' => $concurso_id),
                                        array('Funcionario.categoria_id' => $categoria_id),
                                        array('Funcionario.delegacao_id' => $delegacao_id),
                                        array('Funcionario.posicao' => $posicao)
                                      )//,
                                    // 'AND' => array(
                                    //     array('Funcionario.posicao' => $posicao)
                                    //   )
                                  )
                                )
                          );
      return $funcionario;
    }
    return NULL;
  }

  // cancelar o despacho emitido para qualquer funcionario00

  public function cancelDespacho($id = null) { 
    if ($this->request->is('ajax')) {
      $this->Funcionario->id = $id;
        $funcionario = $this->Funcionario->read();
        if (!empty($funcionario) ) {
            $funcionario['Funcionario']['despacho'] = NULL;
            $funcionario['Funcionario']['nuit'] = 1;
            if ($this->Funcionario->save($funcionario)) {
                $this->render('cancel_despacho', 'ajax');
            }
        } else {
          $this->render('erro', 'ajax');
        }
    }
  }

}

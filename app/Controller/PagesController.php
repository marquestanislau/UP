<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Funcionario', 'User');
	public $components = array('RequestHandler');
	public $helpers = array('Js' => 'Jquery');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->resume();
		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}

	private function resume() {
		// debug($this->concursoAntigo());
		// debug($this->geraNotasParaOsPrimeiros());
		$funcionarios = $this->Funcionario->find('all', array('conditions' => array('Funcionario.despacho not' => NULL)));
		$funcionarios_notas = $this->geraNotasParaOsPrimeiros();
		$usuarios = $this->User->find('all');
		$concursos = $this->Funcionario->Concurso->find('all', array('fields' => 'Concurso.data_aprovacao', 'Concurso.id'));
		$carreiras = $this->Funcionario->Carreira->find('all', array('fields' => 'Carreira.nome', 'Carreira.id'));
		
		$json_concursos_nomes = $this->concursoBarChart($concursos);
		$json_concursos_totalidades = $this->carreirasPorConcurso($concursos);

		$json_carreiras_nomes = $this->nomesParaGraficoCarreiras($carreiras);
		$json_carreiras_participantes = $this->participantePorCarreira($carreiras);

		$this->set(compact('funcionarios', 'usuarios', 'concursos', 'json_concursos_nomes', 'json_concursos_totalidades', 'carreiras', 'json_carreiras_nomes', 'json_carreiras_participantes', 'funcionarios_notas'));
	}

	private function concursoBarChart($concursos = array()) {
		$names = array();
		for ($i = 0; $i < count($concursos); $i++) {
			$names[$i] = $concursos[$i]['Concurso']['data_aprovacao'];
		}
		return $names;
	}

	private function carreirasPorConcurso($concursos = array()) {
		$totalidades = array();
		for ($i = 0; $i < count($concursos); $i++ ) {
			$totalidades[$i] = count($concursos[$i]['Carreira']);
		}
		return $totalidades;
	}

	private function nomesParaGraficoCarreiras( $carreiras = array() ) {
		$nomes = array();
		for ( $i = 0; $i < count($carreiras); $i++ ) {
			$nomes[$i] = $carreiras[$i]['Carreira']['nome'];
		}
		return $nomes;
	}

	private function participantePorCarreira( $carreiras = array() ) {
		$totalidades = array();
		for ( $i = 0; $i < count($carreiras); $i++) {
			$totalidades[$i] = count($this->Funcionario->find('list', array('conditions' => array('carreira_id' => $carreiras[$i]['Carreira']['id']))));
		}
		return $totalidades;
	}

	private function geraNotasParaOsPrimeiros(){
		$limit = 5;
		$concurso_mais_antigo = $this->concursoAntigo();
		$diplomasFuncionarios = $this->Funcionario->find('all', array('limit' => $limit, 'conditions' => array('concurso_id' => $concurso_mais_antigo['Concurso']['id'], 'despacho' => ''), 'order' => array('posicao' => 'asc')));
		$this->set('concurso_mais_antigo', $concurso_mais_antigo);
		return $diplomasFuncionarios;
	}

	// Em busca do concurso mais antigo e ainda aberto 
	private function concursoAntigo() {
		$concursos = $this->Funcionario->Concurso->find('all');
		$concurso_mais_antigo = $concursos[0];
		$data_antiga = $concurso_mais_antigo['Concurso']['data_aprovacao'];
		// Iterar sobre os concursos existentes
		foreach ( $concursos as $concurso ) {
			// Se o valor do status for um entao o concurso esta aberto | 0 fechado
			if ($concurso['Concurso']['status'] == 1 && (strtotime($data_antiga) > strtotime($concurso['Concurso']['data_aprovacao']))) {
				// Inicio a comparacao das datas dos funcionarios
				$data_antiga = $concurso['Concurso']['data_aprovacao'];
				$concurso_mais_antigo = $concurso;

			} else {
				// $concurso_mais_antigo = NULL;
			}
		}
		return $concurso_mais_antigo;
	}
}

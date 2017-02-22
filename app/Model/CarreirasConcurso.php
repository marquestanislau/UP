<?php
App::uses('AppModel', 'Model');
/**
 * CarreirasConcurso Model
 *
 * @property Carreira $Carreira
 * @property Concurso $Concurso
 */
class CarreirasConcurso extends AppModel {

	public $belongsTo = array(
		'Carreira' => array(
			'className' => 'Carreira',
			'foreignKey' => 'carreira_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Concurso' => array(
			'className' => 'Concurso',
			'foreignKey' => 'concurso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

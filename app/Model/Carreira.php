<?php
App::uses('AppModel', 'Model');
/**
 * Carreira Model
 *
 */
class Carreira extends AppModel {

	public $name = 'Carreira';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasMany = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'carreira_id',
		),
		'Documentacao' => array(
			'className' => 'Documentacao',
			'foreignKey' => 'carreira_id',
		), 
		'CarreirasConcurso' => array(
			'className' => 'CarreirasConcurso',
			'foreignKey' => 'carreira_id'
		)		
	);

	// public $hasAndBelongsToMany = array(
 //        'Concurso' =>
 //            array(
 //                'className' => 'Concurso',
 //                'joinTable' => 'carreiras_concursos',
 //                'foreignKey' => 'carreira_id',
 //                'associationForeignKey' => 'concurso_id',
 //                'unique' => 'keepExisting',
 //                'conditions' => '',
 //                'fields' => '',
 //                'order' => '',
 //                'limit' => '',
 //                'offset' => '',
 //                'finderQuery' => '',
 //                'with' => 'carreiras_concursos'
 //            )
 //    );

}

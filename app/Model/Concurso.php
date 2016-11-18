<?php
App::uses('AppModel', 'Model');
/**
 * Concurso Model
 *
 */
class Concurso extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'data_aprovacao' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nome' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasAndBelongsToMany = array(
        'Carreira' =>
            array(
                'className' => 'Carreira',
                'joinTable' => 'carreiras_concursos',
                'foreignKey' => 'concurso_id',
                'associationForeignKey' => 'carreira_id',
                'unique' => 'keepExisting',
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'with' => 'carreiras_concursos'
            )
    );
}

<?php
App::uses('AppModel', 'Model');
/**
 * Funcionario Model
 *
 * @property Cta $Cta
 */
class Funcionario extends AppModel {

	public $validate = array(
		'nome' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo obrigatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apelido' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo obrigatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo obrigatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contacto_pessoal' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo obrigatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasOne = array(
            'Cta' => array(
		'className' => 'Cta'
            ), 
            'Cd' => array(
                'className' => 'Cd'
            )
	);

	public $belongsTo = array (
		'Carreira' => array(
			'className' => 'Carreira',
			'foreignKey' => 'carreira_id'
		),
		'Concurso' => array (
			'className' => 'Concurso',
			'foreignKey' => 'concurso_id'
		),
		'Delegacao' => array(
			'className' => 'Delegacao',
			'foreignKey' => 'delegacao_id'
		)
	);
}

<?php
App::uses('AppModel', 'Model');
/**
 * Funcionario Model
 *
 * @property Cta $Cta
 */
class Funcionario extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
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
		)
	);
}

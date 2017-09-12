<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Este campo e obrigatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apelido' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Este campo deve ser preenchido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Por favor forneca o seu email',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'data_de_registo' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contacto' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Fornca o contacto do utilizador',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		// 'foto_perfil' => array(
		// 	'uploadError' => array(
		// 		'rule' => 'uploadError',
		// 		'message' => 'Ocorreu um erro ao carregar a imagem.',
		// 		'allowEmpty' => TRUE,
		// 	),
		// 	'mimeType' => array(
		// 		'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
		// 		'message' => 'O sistema apenas suporta os formatos (gif, png, jpg).',
		// 		'allowEmpty' => TRUE,
		// 	),
		// 	'fileSize' => array(
		// 		'rule' => array('fileSize', '<=', '1MB'),
		// 		'message' => 'A imagem nao deve exceder 1MB em tamanho.',
		// 		'allowEmpty' => TRUE,	
		// 	),
		// 	'proccessCoverUpload' => array(
		// 		'rule' => 'proccessCoverUpload',
		// 		'message' => 'Nao foi possivel processar a imagem para upload.',
		// 		'allowEmpty' => TRUE,
		// 	),
		// ),
	);

	/*public function proccessCoverUpload($check = array()) {
		if (!is_uploaded_file($check['foto_perfil']['tmp_name'])) {
			return FALSE; 
		} 
		if (!move_uploaded_file($check['foto_perfil']['tmp_name'], WWW_ROOT . 'img' . '/' . 'upload' . '/' . $check['foto_perfil']['name'])) {
			return FALSE;
		}
		$this->data[$this->alias]['foto_perfil'] = 'upload' . '/' . $check['foto_perfil']['name'];
		return TRUE;
	}*/

	public $belongsTo = array(
			'Group' => array(
					'className' => 'Group'
				)
		);
	public $actsAs = array('Acl' => array('type' => 'requester'));

	public function beforeSave($options = array()) {
		$senha_gerada = $this->rand_passwd(10);
		$this->data['User']['password'] = AuthComponent::password(
				$senha_gerada
			);//$this->data['User']['senha'] = AuthComponent::password(
				//$senha_gerada
			//);
		$this->data['User']['apelido'] = $this->data['User']['apelido'].'|'.$senha_gerada;
		return true;
	}

	private function rand_passwd( $length = 8 ) {
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	    return substr( str_shuffle( $chars ), 0, $length );
	}

	public function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$group_id = $this->data['User']['group_id'];
		} else {
			$group_id = $this->field('group_id');
		}
		if (!$group_id) {
			return null;
		} else {
			return array('Group' => array('id' => $group_id));
		}
	}
}

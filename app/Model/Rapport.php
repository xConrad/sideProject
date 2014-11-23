<?php
App::uses('AppModel', 'Model');
/**
 * Rapport Model
 *
 * @property Avenants $Avenants
 * @property Clients $Clients
 * @property Projects $Projects
 */
class Rapport extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'rapport';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'avenants_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'clients_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'projects_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Avenants' => array(
			'className' => 'Avenants',
			'foreignKey' => 'avenants_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Clients' => array(
			'className' => 'Clients',
			'foreignKey' => 'clients_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Projects' => array(
			'className' => 'Projects',
			'foreignKey' => 'projects_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

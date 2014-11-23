<?php
/**
 * RapportFixture
 *
 */
class RapportFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'rapport';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'avenants_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'clients_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'projects_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'avenants_id' => 1,
			'clients_id' => 1,
			'projects_id' => 1
		),
	);

}

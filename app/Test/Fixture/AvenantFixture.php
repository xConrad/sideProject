<?php
/**
 * AvenantFixture
 *
 */
class AvenantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'avenant_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'avenant_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'avenant_description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'projects_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'avenant_name' => 'Lorem ipsum dolor sit amet',
			'avenant_date' => '2014-11-22',
			'avenant_description' => 'Lorem ipsum dolor sit amet',
			'projects_id' => 1,
			'status_id' => 1
		),
	);

}

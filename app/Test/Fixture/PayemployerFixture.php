<?php
/**
 * PayemployerFixture
 *
 */
class PayemployerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'pay' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'pay_supp' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'titles_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'pay' => 1,
			'pay_supp' => 1,
			'titles_id' => 1
		),
	);

}

<?php
App::uses('Usine', 'Model');

/**
 * Usine Test Case
 *
 */
class UsineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usine'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usine = ClassRegistry::init('Usine');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usine);

		parent::tearDown();
	}

}

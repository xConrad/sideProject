<?php
App::uses('Salairy', 'Model');

/**
 * Salairy Test Case
 *
 */
class SalairyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salairy',
		'app.titles'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Salairy = ClassRegistry::init('Salairy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Salairy);

		parent::tearDown();
	}

}

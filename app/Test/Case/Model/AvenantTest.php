<?php
App::uses('Avenant', 'Model');

/**
 * Avenant Test Case
 *
 */
class AvenantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.avenant',
		'app.projects',
		'app.status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Avenant = ClassRegistry::init('Avenant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Avenant);

		parent::tearDown();
	}

}

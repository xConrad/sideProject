<?php
App::uses('Rapport', 'Model');

/**
 * Rapport Test Case
 *
 */
class RapportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rapport',
		'app.avenants',
		'app.clients',
		'app.projects'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rapport = ClassRegistry::init('Rapport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rapport);

		parent::tearDown();
	}

}

<?php
App::uses('Payemployer', 'Model');

/**
 * Payemployer Test Case
 *
 */
class PayemployerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payemployer',
		'app.titles'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Payemployer = ClassRegistry::init('Payemployer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Payemployer);

		parent::tearDown();
	}

}

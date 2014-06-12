<?php
App::uses('Gametype', 'Model');

/**
 * Gametype Test Case
 *
 */
class GametypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gametype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gametype = ClassRegistry::init('Gametype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gametype);

		parent::tearDown();
	}

}

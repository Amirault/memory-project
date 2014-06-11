<?php
App::uses('Difficulty', 'Model');

/**
 * Difficulty Test Case
 *
 */
class DifficultyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.difficulty',
		'app.game'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Difficulty = ClassRegistry::init('Difficulty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Difficulty);

		parent::tearDown();
	}

}

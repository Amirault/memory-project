<?php
App::uses('Player', 'Model');

/**
 * Player Test Case
 *
 */
class PlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.player',
		'app.game',
		'app.difficulty',
		'app.gametype',
		'app.game_card',
		'app.card',
		'app.collection',
		'app.game_player'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Player = ClassRegistry::init('Player');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Player);

		parent::tearDown();
	}

}

<?php
App::uses('GamePlayer', 'Model');

/**
 * GamePlayer Test Case
 *
 */
class GamePlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.game_player',
		'app.player',
		'app.game',
		'app.difficulty',
		'app.gametype',
		'app.game_card',
		'app.card',
		'app.collection'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GamePlayer = ClassRegistry::init('GamePlayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GamePlayer);

		parent::tearDown();
	}

}

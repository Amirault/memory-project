<?php
App::uses('GameCard', 'Model');

/**
 * GameCard Test Case
 *
 */
class GameCardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.game_card',
		'app.game',
		'app.difficulty',
		'app.gametype',
		'app.player',
		'app.game_player',
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
		$this->GameCard = ClassRegistry::init('GameCard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GameCard);

		parent::tearDown();
	}

}

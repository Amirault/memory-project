<?php
App::uses('Card', 'Model');

/**
 * Card Test Case
 *
 */
class CardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.card',
		'app.collection',
		'app.game_player',
		'app.player',
		'app.game',
		'app.difficulty',
		'app.gametype',
		'app.game_card'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Card = ClassRegistry::init('Card');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Card);

		parent::tearDown();
	}

}

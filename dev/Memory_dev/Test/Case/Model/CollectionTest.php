<?php
App::uses('Collection', 'Model');

/**
 * Collection Test Case
 *
 */
class CollectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.collection',
		'app.card',
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
		$this->Collection = ClassRegistry::init('Collection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Collection);

		parent::tearDown();
	}

}

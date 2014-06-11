<?php
/**
 * GamePlayerFixture
 *
 */
class GamePlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'player_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'game_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'card_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'points' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'player_id' => array('column' => 'player_id', 'unique' => 0),
			'game_id' => array('column' => 'game_id', 'unique' => 0),
			'card_id' => array('column' => 'card_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'player_id' => 1,
			'game_id' => 1,
			'card_id' => 1,
			'points' => 1,
			'created' => '2014-06-11 10:56:44',
			'modified' => '2014-06-11 10:56:44'
		),
	);

}

<?php
/**
 * GameCardFixture
 *
 */
class GameCardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'game_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'position_x' => array('type' => 'integer', 'null' => false, 'default' => null),
		'position_y' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'card_id' => array('column' => 'card_id', 'unique' => 0),
			'game_id' => array('column' => 'game_id', 'unique' => 0)
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
			'game_id' => 1,
			'card_id' => 1,
			'position_x' => 1,
			'position_y' => 1,
			'created' => '2014-06-11 01:46:58',
			'modified' => '2014-06-11 01:46:58'
		),
	);

}

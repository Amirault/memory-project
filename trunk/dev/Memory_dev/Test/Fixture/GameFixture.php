<?php
/**
 * GameFixture
 *
 */
class GameFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'difficulty_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'isPending' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'numberOfPlayers' => array('type' => 'integer', 'null' => false, 'default' => null),
		'numberMaximumOfPlayers' => array('type' => 'integer', 'null' => false, 'default' => null),
		'currentPlayer' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hostPlayer' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'hostPlayer' => array('column' => 'hostPlayer', 'unique' => 0),
			'difficulty_id' => array('column' => 'difficulty_id', 'unique' => 0)
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
			'difficulty_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'isPending' => 1,
			'numberOfPlayers' => 1,
			'numberMaximumOfPlayers' => 1,
			'currentPlayer' => 1,
			'hostPlayer' => 1,
			'created' => '2014-06-11 01:46:59',
			'modified' => '2014-06-11 01:46:59'
		),
	);

}

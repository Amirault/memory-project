<?php
/**
 * CardFixture
 *
 */
class CardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'pathOfImage' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'collection_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'card_id' => array('column' => 'card_id', 'unique' => 0),
			'collection_id' => array('column' => 'collection_id', 'unique' => 0)
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
			'pathOfImage' => 'Lorem ipsum dolor sit amet',
			'card_id' => 1,
			'collection_id' => 1,
			'created' => '2014-06-11 10:56:42',
			'modified' => '2014-06-11 10:56:42'
		),
	);

}

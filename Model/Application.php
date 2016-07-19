<?php
App::uses('AppModel', 'Model');
/**
 * Application Model
 *
 */
class Application extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'application';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $validate = array(
		'size' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		)
	);

}

<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model for "configurations" table
 *
 * @package    Ilch/Database
 * @category   Configuration
 * @author     Ilch Team
 * @copyright  (c) 2012 Ilch Team
 * @license    http://www.ilch-pluto.net/license
 */
class Model_Configuration extends Jelly_Model
{
    public static function initialize(Jelly_Meta $meta)
    {
    	// Set table name
    	$meta->table('configurations');
		
        // Fields defined by the model
        $meta->fields(array(
            'id'			=> Jelly::field('primary'),
            'group'			=> Jelly::field('string'),
            'key'			=> Jelly::field('string'),
            'type'			=> Jelly::field('string'),
            'value'			=> Jelly::field('serialized'),
        ));
		
		// Run event
		Event::run('Model_Configuration::initialize::after', $meta);
    }
}
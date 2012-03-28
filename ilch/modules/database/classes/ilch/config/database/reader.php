<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Database reader for the kohana config system
 *
 * @package    Ilch/Database
 * @category   Configuration
 * @author     Kohana Team, Ilch Team
 * @copyright  (c) 2007-2011 Kohana Team, (c) 2012 Ilch Team
 * @license    http://www.ilch-pluto.net/license
 */
class Ilch_Config_Database_Reader implements Kohana_Config_Reader
{
	protected $_loaded_groups = array();

	/**
	 * Tries to load the specificed configuration group
	 *
	 * Returns FALSE if group does not exist or an array if it does
	 *
	 * @param  string $group Configuration group
	 * @return boolean|array
	 */
	public function load($group)
	{
		// Database configurations are not configured in database
		if ($group == 'database') return FALSE;

		// Group already loaded
		if (isset($this->_loaded_groups[$group]))
		{
			return $this->_loaded_groups[$group];
		}
		// There are no groups loaded
		elseif (count($this->_loaded_groups) == 0)
		{
			$result = Jelly::query('configuration')->select();
			
			foreach($result as $row)
			{
			    if ($row->loaded())
			    {
			    	// Create group array
			    	if ( ! isset($this->_loaded_groups[$row->group]))
					{
						$this->_loaded_groups[$row->group] = array();
					}
					
			        $this->_loaded_groups[$row->group][$row->key] = $row->value;
			    }
			}
		}
		
		// Group not found
		return FALSE;
		
		$query = DB::select('config_key', 'config_value')
			->from($this->_table_name)
			->where('group_name', '=', $group)
			->execute($this->_db_instance);

		return count($query) ? array_map('unserialize', $query->as_array('config_key', 'config_value')) : FALSE;
	}
}

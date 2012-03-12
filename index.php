<?php

/**
 * Define a short directory separator
 * 
 * @see  http://php.net/manual/de/dir.constants.php
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * The directory in which your application specific resources are located.
 * The application directory must contain the bootstrap.php file.
 *
 * @see  http://kohanaframework.org/guide/about.install#application
 */
$application_path = 'application';

/**
 * The custom contents directory.
 */
$contents_path = 'contents';

/**
 * The Ilch CMS directory.
 */
$ilch_path = 'ilch';

/**
 * The Kohana framework directory.
 */
$kohana_path = 'kohana';

/**
 * The name for the subfolder for modules
 *  - relative to the custom contents directory
 *  - relative to the Ilch CMS directory
 *  - relative to the Kohana framework directory
 */
$module_directory = 'modules';

/**
 * The name for the subfolder for themes
 *  - relative to the custom contents directory
 *  - relative to the Ilch CMS directory
 */
$theme_directory = 'themes';

/**
 * The name for the subfolder for the system
 *  - relative to the Ilch CMS directory
 *  - relative to the Kohana framework directory
 */
$system_directory = 'system';

/**
 * The default extension of resource files. If you change this, all resources
 * must be renamed to use the new extension.
 *
 * @see  http://kohanaframework.org/guide/about.install#ext
 */
define('EXT', '.php');

/**
 * Set the PHP error reporting level. If you set this in php.ini, you remove this.
 * @see  http://php.net/error_reporting
 *
 * When developing your application, it is highly recommended to enable notices
 * and strict warnings. Enable them by using: E_ALL | E_STRICT
 *
 * In a production environment, it is safe to ignore notices and strict warnings.
 * Disable them by using: E_ALL ^ E_NOTICE
 *
 * When using a legacy application with PHP >= 5.3, it is recommended to disable
 * deprecated notices. Disable with: E_ALL & ~E_DEPRECATED
 */
error_reporting(E_ALL | E_STRICT);

/**
 * End of standard configuration! Changing any of the code below should only be
 * attempted by those with a working knowledge of Kohana internals.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 */

// Set the full path to the docroot
define('DOCROOT', realpath(dirname(__FILE__)).DS);

// Make the application path relative to the docroot
if ( ! is_dir($application_path) AND is_dir(DOCROOT.$application_path))
	$application_path = DOCROOT.$application_path;

// Make the custom contents path relative to the docroot
if ( ! is_dir($contents_path) AND is_dir(DOCROOT.$contents_path))
	$contents_path = DOCROOT.$contents_path;

// Make the Ilch CMS path relative to the docroot
if ( ! is_dir($ilch_path) AND is_dir(DOCROOT.$ilch_path))
	$ilch_path = DOCROOT.$ilch_path;

// Make the Kohana framework path relative to the docroot
if ( ! is_dir($kohana_path) AND is_dir(DOCROOT.$kohana_path))
	$kohana_path = DOCROOT.$kohana_path;

// Define the absolute path for the application path
define('APPLICATION', realpath($application_path).DS);

// Define the absolute path for the custom contents path
define('CONTENTS', realpath($contents_path).DS);
define('CONTENTS_THEME', realpath($contents_path.DS.$theme_directory).DS);
define('CONTENTS_MODULE', realpath($contents_path.DS.$module_directory).DS);

// Define the absolute path for the Ilch CMS path
define('ILCH', realpath($ilch_path).DS);
define('ILCH_THEME', realpath($ilch_path.DS.$theme_directory).DS);
define('ILCH_MODULE', realpath($ilch_path.DS.$module_directory).DS);
define('ILCH_SYSTEM', realpath($ilch_path.DS.$system_directory).DS);

// Define the absolute path for the Kohana framework path
define('KOHANA', realpath($kohana_path).DS);
define('KOHANA_MODULE', realpath($kohana_path.DS.$module_directory).DS);
define('KOHANA_SYSTEM', realpath($kohana_path.DS.$system_directory).DS);

// Default Kohana definations
define('APPPATH', APPLICATION);
define('MODPATH', KOHANA_MODULE);
define('SYSPATH', KOHANA_SYSTEM);

// Clean up the configuration vars
unset($application_path, $contents_path, $ilch_path, $kohana_path, $theme_directory, $module_directory, $system_directory);

/**
 * Wird erstmal auskommentiert, die Install-Runtime steht auch noch nicht fest
 * 
if (file_exists('install'.EXT))
{
	// Load the installation check
	return include 'install'.EXT;
}
 */

/**
 * Define the start time of the application, used for profiling.
 */
if ( ! defined('KOHANA_START_TIME'))
{
	define('KOHANA_START_TIME', microtime(TRUE));
}

/**
 * Define the memory usage at the start of the application, used for profiling.
 */
if ( ! defined('KOHANA_START_MEMORY'))
{
	define('KOHANA_START_MEMORY', memory_get_usage());
}

// Bootstrap the application
require APPPATH.'bootstrap'.EXT;

/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
echo Request::factory()
	->execute()
	->send_headers()
	->body();

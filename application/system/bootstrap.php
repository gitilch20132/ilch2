<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana and the core Ilch class
require KOHANA_SYSTEM.'classes/kohana/core'.EXT;
require ILCH_SYSTEM.'classes/ilch/core'.EXT;

if (is_file(APPLICATION_SYSTEM.'classes/ilch'.EXT))
{
	// Application extends the core
	require APPLICATION_SYSTEM.'classes/ilch'.EXT;
}
else
{
	// Load empty core extension
	require ILCH_SYSTEM.'classes/ilch'.EXT;
}

if (is_file(APPLICATION_SYSTEM.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPLICATION_SYSTEM.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require ILCH_SYSTEM.'classes/kohana'.EXT;
}


/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('de');

/**
 * Set Ilch::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Ilch::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Ilch::$environment = constant('Ilch::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Set paths to modules
 */
Content_Module_Loader::$paths = array(
	APPLICATION.DS.'module',
	ILCH.DS.'module',
	KOHANA.DS.'module'
);

/**
 * Set paths to themes
 */
Content_Theme_Loader::$paths = array(
	APPLICATION.DS.'theme',
	ILCH.DS.'theme',
);

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Ilch::init();
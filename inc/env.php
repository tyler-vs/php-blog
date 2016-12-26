<?php
/**
 * env.php
 * -------
 *
 * contains commonly used environment variables, database connection variables.
 */


/**
 * table of contents
 * -----------------
 * 01. define site-wide constants
 * 02. enable error reporting
 *
 */


/**
 * 01. define site-wide constants
 * ------------------------------
 */
define( 'SITENAME', 'PHP Blog Project' );
define( 'ERRLOG', TRUE );
define( 'VERSION', 2.12 );
define( 'TIMEZONE', 'America/New_York' );
define( 'POSTED_ON_FORMAT', date('F j, Y') ); // Month d, YYYY

/**
 * 02. enable error reporting
 * --------------------------
 */
if ( defined('ERRLOG') && ERRLOG == true ) {  // if defined and TRUE
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );

  $err_log_array = [];
  $err_log_array[] = 'error handling is on - ' . date('H:i:s a');
}


/**
 * 03. user status and handling
 * ----------------------------
 */
$user_signed_in = 0;


/**
 * 04. date and time settings
 * --------------------------
 */
date_default_timezone_set(TIMEZONE);

 ?>
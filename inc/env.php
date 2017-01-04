<?php
/**
 * env.php
 * -------
 *
 * Contains commonly used environment variables, database connection variables.
 * This script is ran on every page.
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
define( 'SITE_NAME', 'PHP Blog Project' );
define( 'ERRLOG', TRUE );
define( 'VERSION', 2.12 );
define( 'TIME_ZONE', 'America/New_York' );
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
/*if (isset($_COOKIE['user_email'])) {
  // $user_signed_in = true;
  define('LOGGEDIN', true);
} else {
  define('LOGGEDIN', false);
}*/


/**
 * 04. date and time settings
 * --------------------------
 */
date_default_timezone_set(TIME_ZONE);



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
define('ERRLOG', TRUE);
define('VERSION', 2.12);

/**
 * 02. enable error reporting
 * --------------------------
 */
if (defined('ERRLOG')) {
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );

  $err_log_array = [];
}


/**
 * 03. user status and handling
 * ----------------------------
 */
$user_signed_in = 0;

 ?>
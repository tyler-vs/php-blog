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


/**
 * 02. enable error reporting
 * --------------------------
 */
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );


/**
 * 03. user status and handling
 * ----------------------------
 */
$user_signed_in = 0;

 ?>
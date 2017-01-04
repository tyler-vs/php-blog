<?php
/**
 * header.php
 *
 * this is the first script that is included in every page on the website.
 * it handles the following:
 *
 * 00. Begins output buffering technique
 * 01. Includes not-printing php scripts, i.e. env variables, functions
 * 02. ---
 * 03. Starts webpage header HTML content
 * 04. Validates and print page's HMTL title
 * 05. Determine and output page navigation links
 * 06. Page header
 *
 */


/**
 * 00. Begins output buffering technique
 * -------------------------------------
 * begin output buffering
 */

ob_start();


/**
 * 01. Includes not-printing php scripts, i.e. env variables, functions
 * --------------------------------------------------------------------
 * - site-wide variables
 * - useful functions, sort of like functions.php?
 */

require('inc/env.php');
require('inc/form_functions.inc.php');





/**
 * 03. Starts webpage header HTML content
 * --------------------------------------
 */
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php
    /**
     * 04. Validates and print page's HMTL title
     * -----------------------------------------
     * A function to see if the site title constant is defined,
     * if it is then output the site's title else add an error
     * to the log and print a default name.
     */
    if ( defined('SITE_NAME') ) { // constant defined, output it
      print SITE_NAME . ' &vert; ' . ucwords( PAGE_TITLE );
    } else { // no site name constant defined
      print 'Blog Project';
      $err_log_array[] = 'site title is missing or not defined';
    }
    ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
  <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
          /**
           * 05. Determine and output page navigation links
           * ----------------------------------------------
           */

          $this_page = basename($_SERVER['PHP_SELF']);
          // array of pages
          $pages=array(
            'home'          => 'index.php',
            'about'         => 'about.php',
            'debug'         => 'debug.php'
          );

          if ( isset( $_SESSION['loggedin'] ) ) { // pages that appear when user is signed out
            // $logged_in_pages = ;

            $pages = array_merge( $pages, array(
              'logout'        => 'logout.php'
            ) );

          } else { // pages that appear if user is logged in

            /*$logged_out_pages = array(
              'register'      => 'register.php',
              'login'         => 'login.php'
            );*/

            $pages = array_merge( $pages, array(
              'register'      => 'register.php',
              'login'         => 'login.php'
            ) );
          }

          // potential future pages
          $future_pages = array(
            'press'         => 'press.php',
            'new features'  => 'new-features.php'
          );

          // output all the available pages
          foreach( $pages as $key => $value ) {

            if ( $this_page == $value ) {
              print '<a class="blog-nav-item active" href="' . $value . '">' . ucwords( $key ) . '</a>';
            } else {
              print '<a class="blog-nav-item" href="' . $value . '">' . ucwords( $key ) . '</a>';
            }
          }
           ?>
        </nav>
      </div>
    </div>


    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php
          /**
           * 06. Page header
           * ---------------
           */
          if ( defined('PAGE_TITLE') ) {
            print ucwords(PAGE_TITLE);
          } else { // not page title defined
            print 'Page Title Err';
            $err_log_array[] = 'page title is missing or not defined';
          }
         ?></h1>
        <p class="lead blog-description"><?php
          // check for existance of page description,
          // else print an error.
          if (defined('PAGE_DESCRIPTION')) {
            print PAGE_DESCRIPTION;
          } else { // no page description found.
            $err_log_array[] = '<b>page description</b> is missing or not defined';
            print 'Page description err.';
          }
           ?></p>
      </div> <!-- /.blog-header -->

      <div class="row">
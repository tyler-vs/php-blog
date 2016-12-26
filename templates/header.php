<?php
/**
 * header.php
 * ----------
 */
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php

    if (defined('SITENAME')) {
      print SITENAME . ' &vert; ' . ucwords( $current_page );
    } else {
      $err_log_array[] = 'site title is missing/not defined';
    }
    ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
  <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php

          // array of pages
          $pages=array(
            'home'          => 'index.php',
            'about'         => 'about.php',
            'signup'        => 'signup.php',
            'login'         => 'login.php',
            'press'         => 'press.php',
            'new features'  => 'new-features.php',
            'debug'         =>  'debug.php'
          );

          // output all the available pages
          foreach( $pages as $key => $value ) {

            if ( $current_page == $key ) {
              print '<a class="blog-nav-item active" href="' . $value . '">' . ucwords( $key ) . '</a>';
            } else {
              print '<a class="blog-nav-item" href="' . $value . '">' . ucwords( $key ) . '</a>';
            }
          }
           ?>
        </nav>
      </div>
    </div>
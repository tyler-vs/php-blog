<?php
/**
 * welcome.php
 *
 * page that user is redirected to among successful login.
 */

session_start();

define('PAGETITLE', ucwords('welcome') ); //
include('inc/env.php');

 ?>
<?php include('templates/header.php'); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php print PAGETITLE; ?></h1>
        <?php

        // check to see if session variables is set before greeting the
        // user with their email address.
        if( isset($_SESSION['email']) ) {
          print '<p class="lead blog-description">Hello, ' . htmlentities($_SESSION['email']) . '!</p>';
        }

        // check to see if logged in is set, if so use that timestamp
        // value tme/date that the user has been logged in since.
        if (isset($_SESSION['loggedin'])) {
          print '<p>You have been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '</p>';
        }
         ?>
        <p><a href="logout.php">Ready to logout?</a></p>
      </div>

      <div class="row">

        <div class="eight columns blog-main">
          <p>Your logged in!</p>

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
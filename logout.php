<?php
/**
 * logout.php
 *
 * removing session data takes 2 steps:
 *   1. removing from session array
 *   2. removing from server
 */

// even when deleting a session, you must initialize the file
// with a session_start to access the session.
session_start();

// clear the session by resetting the session array
$_SESSION = [];

// remove session data from server
session_destroy();

// clear session cookie
// setcookie();


define('PAGETITLE', ucwords('logout') );
include('inc/env.php');

 ?>
<?php include('templates/header.php'); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php print PAGETITLE; ?></h1>
        <p class="lead blog-description"></p>
      </div>

      <div class="row">

        <div class="eight columns blog-main">

        <p>Go to <a href="index.php">home</a> or <a href="login.php">sign back in</a></p>

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
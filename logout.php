<?php
/**
 * logout.php
 *
 * removing session data takes 2 steps:
 *   1. removing from session array
 *   2. removing from server
 */

session_start();

// clear the session by resetting the session array
$_SESSION = [];

// remove session data from server
session_destroy();


define('PAGE_TITLE', 'logout' );
define('PAGE_DESCRIPTION', 'This is the logout page for the website' );

 ?>
<?php include('templates/header.php'); ?>

        <div class="col-sm-8 blog-main">

          <p>Go to <a href="index.php">home</a> or <a href="login.php">sign back in</a></p>

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

<?php require('templates/footer.php'); ?>
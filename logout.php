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


define('PAGE_TITLE', 'logout' );
define('PAGE_DESCRIPTION', 'This is the logout page for the website' );

 ?>
<?php include('templates/header.php'); ?>

        <div class="eight columns blog-main">

          <p>Go to <a href="index.php">home</a> or <a href="login.php">sign back in</a></p>

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
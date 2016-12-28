<?php
/**
 * welcome.php
 *
 * page that user is redirected to among successful login.
 */


define('PAGE_TITLE', 'welcome' );
define('PAGE_DESCRIPTION', 'welcome user.' );

// if user is not logged in then send them to home page.
if ( !isset($_SESSION['email']) || ! isset($_SESSION['loggedin']) ) {
  header('Location: index.php');
  exit();
}


$welcome_messages = [];
// check to see if session variables is set before greeting the
// user with their email address.
if( isset($_SESSION['email']) ) {
  $welcome_messages[] = 'Hello, ' . htmlentities( $_SESSION['email'] ) . ' !';
}

// check to see if logged in is set, if so use that timestamp
// value tme/date that the user has been logged in since.
if ( isset( $_SESSION['loggedin'])) {
  $welcome_messages[] = 'You have been logged in since: ' . date('g:i a', $_SESSION['loggedin'] ) . ' !';
}
 ?>
<?php include('templates/header.php'); ?>
        <div class="eight columns blog-main">
          <?php
          // check to make sure we have messages in the array to
          // display
          if ( count( $welcome_messages ) > 0 ) { // we have messages, display them!
            foreach ( $welcome_messages as $message ) { // we do not have messages,
              print "<p>$message</p>";
            }
          } else {
            print 'Error';
          }
          ?>

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
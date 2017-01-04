<?php
/**
 * welcome.php
 *
 * page that user is redirected to among successful login.
 */


define('PAGE_TITLE', 'welcome' );
define('PAGE_DESCRIPTION', 'welcome user.' );

// if user is not logged in then send them to home page.
/*if ( isset($_SESSION['loggedin']) ) {

} else {
  header('Location: index.php');
  exit();
}
*/

 ?>
<?php include('templates/header.php'); ?>
        <div class="col-sm-8 blog-main">
          <?php
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
          // check to make sure we have messages in the array to
          // display
          if ( count( $welcome_messages ) > 0 ) { // we have messages, display them!
            foreach ( $welcome_messages as $message ) { // we do not have messages,
              print "<p>$message</p>";
            }
          } else {
            print 'Error,';
          }


          ?>
          <h3>Session array data</h3>
          <pre>
            <?php print_r( $_SESSION ); ?>
          </pre>

        </div><!-- /.blog-main -->

        <?php // include('templates/sidebar.php'); ?>

<?php require('templates/footer.php'); ?>
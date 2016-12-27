<?php
/**
 * login
 */

define('PAGETITLE', 'login' );
include('inc/env.php');
include('inc/form-functions.php');

 ?>
<?php include('templates/header.php'); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php print ucwords(PAGETITLE); ?></h1>
        <p class="lead blog-description">login using this form.</p>
      </div>

      <div class="row">

        <div class="eight columns blog-main">
          <?php

          // check for user submission via the REQUEST_METHOD and
          // if POST then handle form else display the form
          if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // warning: post is case-sensitive!

            // handle form

            // check if fields are empty or not
            if ( !empty($_POST['email']) || !empty($_POST['user_password']) ) {

              // check demo validate
              // - me@example.com
              // - testpass
              if (
                  ( strtolower($_POST['email']) == 'me@example.com') &&
                  ( strtolower($_POST['user_password']) == 'testpass' ) ) {

                // upon successful validation, start a user session,
                // because output buffering technique is used we can
                // call a session start here instead of on top of a
                // page, where it normally would occur.
                // any page that wants to use $_SESSION array will need
                // to decalre this function near the top of that page.
                session_start();
                // use session to add variables
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['loggedin'] = time();


                // correct, send user to welcome screen
                ob_end_clean(); // end current buffer
                header('Location: welcome.php');  // redirect user to welcome screen
                exit(); // prevents rest of this page's script from being executed.

              } else {  // email or password did not pass

                // $_POST['password'] = [];  // reset $_POST superglobal values

                // output error message
                print '<p>the password or email is incorrect :/, please try again <a href="login.php">Retry</a></p>';

              }
            }


          } else { // display form again

          ?>
          <form action="login.php" method="post">
            <div class="row">
              <div class="twelve columns">
                <label for="email">user email</label>
                <input class="u-full-width" type="email" name="email" value="<?php preset_value('email'); ?>">
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="user_password">your password</label>
                <input class="u-full-width" type="password" name="user_password" value="<?php preset_value('user_password'); ?>">
              </div>
            </div>
            <div class="row">
              <!-- <input type="hidden" name="login-couter" value="sent"> -->
              <input class="button--round" type="submit">
            </div>
          </form>
          <?php } // end ?>
        </div><!-- /.blog-main -->

        <?php // include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
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
            if ( !empty($_POST['user_email']) || !empty($_POST['user_password']) ) {

              // check demo validate
              // - me@example.com
              // - testpass
              if (
                  ( strtolower($_POST['user_email']) == 'me@example.com') &&
                  ( strtolower($_POST['user_password']) == 'testpass' ) ) {

                // setup a cookie for user
                // NOTE: this can only be done within the script
                // because output buffer technique is in use!!
                setcookie('bloguser', $_POST['user_email']);

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
                <label for="user_email">user email</label>
                <input class="u-full-width" type="email" name="user_email" value="<?php preset_value('user_email'); ?>">
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
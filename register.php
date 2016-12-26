<?php
/**
 * register
 * --------
 */

define('PAGETITLE', 'register' );
include('inc/env.php');
include('inc/form-functions.php');

 ?>
<?php include('templates/header.php'); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php print ucwords(PAGETITLE); ?></h1>
        <!-- <p class="lead blog-description">login using this form.</p> -->
        <?php if ( ! $user_signed_in ) {
          include_once( 'templates/join-now-cta.php' );
        } ?>
      </div>

      <div class="row">

        <div class="eight columns blog-main">
          <?php
          // if request
          if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // warning: post is case-sensitive

            // valifation variables
            $form_problems = [];

            /**
             * check if any of the expected variables are missing
             */
            if (empty($_POST['first_name'])) {
              $form_problems[] = 'please enter a first name';
            }
            if (empty($_POST['last_name'])) {
              $form_problems[] = 'please enter a last name';
            }
            if (empty($_POST['email'])) {
              $form_problems[] = 'please enter a email';
            }
            if (empty($_POST['password1'])) {
              $form_problems[] = 'please enter a password';
            }
            if (empty($_POST['password2'])) {
              $form_problems[] = 'please enter the password again';
            }
            if ($_POST['password1'] != $_POST['password2']) {
              $form_problems[] = 'your passwords do not match!';
            }

            if (count($form_problems)>0) {
              print "no errors found!";
            }

          }

          // no else default for registration page.

          ?>
          <form action="login.php" method="post">
            <div class="row">
              <div class="twelve columns">
                <label name="first_name">First Name</label>
                <input class="u-full-width" type="text" name="first_name" value="<?php preset_value('first_name'); ?>">
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label name="last_name">Last Name</label>
                <input class="u-full-width" type="text" name="last_name" value="<?php preset_value('last_name'); ?>">
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label>Email Address</label>
                <input class="u-full-width" type="email" name="email" value="<?php preset_value('email'); ?>">
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label>Password</label>
                <input class="u-full-width" type="password" name="user_password" value="<?php preset_value('password1'); ?>">
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label>Check Password</label>
                <input class="u-full-width" type="password" name="password2" value="<?php preset_value('user_password'); ?>">
              </div>
            </div>
            <div class="row">
              <!-- <input type="hidden" name="hidden-form-element" value="send-form"> -->
              <input class="button--round" type="submit" value="Register">
            </div>
          </form>
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
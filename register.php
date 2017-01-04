<?php
/**
 * register
 */

define('PAGE_TITLE', 'register' );
define('PAGE_DESCRIPTION', 'Register to use this website.' );

 ?>
<?php include('templates/header.php'); ?>

        <div class="col-sm-8 blog-main">
          <?php
          // if request
          if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // warning: post is case-sensitive and should appear as uppercase

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
            if (empty($_POST['user_password'])) {
              $form_problems[] = 'please enter a password';
            }
            if (empty($_POST['password2'])) {
              $form_problems[] = 'please enter the password again';
            }
            if ($_POST['user_password'] != $_POST['password2']) {
              $form_problems[] = 'your passwords do not match!';
            }

            if (count($form_problems)>0) {
              print "no errors found!";
            }

          } // no else default for registration page.

          ?>
          <form action="register.php" method="post">
            <?php

            /**
             * generate form with custom made form functions
             */

            // a
            /*$form_items = [
              'first_name'  =>  array(
                'placeholder' => 'your first name')
            ];*/
             ?>
            <div class="row">
              <div class="twelve columns">
                <?php make_form_input('first_name', 'First name', 'text' ); ?>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <?php make_form_input('last_name', 'Last name', 'text'); ?>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <?php make_form_input('email', 'Your email address', 'email'); ?>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <?php make_form_input('user_password', 'A password', 'password'); ?>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <?php make_form_input('password2', 'Check password', 'password'); ?>
              </div>
            </div>
            <div class="row">
              <input class="button--round" type="submit" value="Register">
            </div>
          </form>
        </div><!-- /.blog-main -->

        <div class="four columns">
          <pre>
            <?php if ($_SERVER['REQUEST_METHOD'] = 'POST') {
              print_r( $_POST );
            } ?>
          </pre>
        </div>

<?php require('templates/footer.php'); ?>
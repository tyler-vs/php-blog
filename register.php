<?php
/**
 * register
 */

define('PAGE_TITLE', 'register' );
define('PAGE_DESCRIPTION', 'Register to use this website.' );

$reg_errors = array();

 ?>
<?php include('templates/header.php'); ?>

        <div class="col-sm-8 blog-main">
          <?php
          // if request
          if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) { // warning: post is case-sensitive and should appear as uppercase

            if (empty($_POST['first_name'])) {
              $reg_errors['first_name'] = 'please enter a first name';
            }
            if (empty($_POST['last_name'])) {
              $reg_errors['last_name'] = 'please enter a last name';
            }
            if (empty($_POST['email'])) {
              $reg_errors['email'] = 'please enter a email';
            }
            if (empty($_POST['password'])) {
              $reg_errors['password'] = 'please enter a password';
            }
            if (empty($_POST['check_password'])) {
              $reg_errors['check_password'] = 'please enter the password again';
            }
            if ($_POST['password'] != $_POST['check_password']) {
              $reg_errors['check_password'] = 'your passwords do not match!';
            }

          } // no else default for registration page.

          ?>
          <form action="register.php" method="post">
            <?php

            /**
             * generate form with custom made form functions
             */

            create_form_input('first_name', 'text', 'First name: ', $reg_errors, array('required' => 'required'), 'POST');

            create_form_input('last_name', 'text', 'Last name: ', $reg_errors, array('required' => 'required'), 'POST');

            create_form_input('email', 'email', 'Email: ', $reg_errors, array('required' => 'required'), 'POST');

            create_form_input('password', 'password', 'Password: ', $reg_errors, array('required' => 'required'), 'POST');

            create_form_input('check_password', 'password', 'Check password: ', $reg_errors, array('required' => 'required'), 'POST');

             ?>
            <div class="row">
              <input class="btn btn-primary" type="submit" value="Register">
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
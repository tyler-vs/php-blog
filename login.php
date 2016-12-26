<?php
/**
 * index.php
 * ---------
 */

include('inc/env.php');
include('inc/form-functions.php');

$current_page = 'login';

 ?>
<?php include('templates/header.php'); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php print $current_page; ?></h1>
        <p class="lead blog-description">login using this form.</p>
        <?php if ( ! $user_signed_in ) {
          include_once( 'templates/join-now-cta.php' );
        } ?>
      </div>

      <div class="row">

        <div class="eight columns blog-main">
          <?php
          if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // warning: post is case-sensitive


          } else {

          }
          ?>
          <form action="login.php" method="post">
            <div class="row">
              <div class="twelve columns">
                <label>user name</label>
                <input class="u-full-width" type="text" name="user_name" value="<?php preset_value('user_name'); ?>">
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label>your email</label>
                <input class="u-full-width" type="email" name="user_email" value="<?php preset_value('user_email'); ?>">
              </div>
            </div>
            <div class="row">
              <!-- <input type="hidden" name="hidden-form-element" value="send-form"> -->
              <input class="button--round" type="submit">
            </div>
          </form>
        </div><!-- /.blog-main -->

        <?php // include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
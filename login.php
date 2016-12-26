<?php
/**
 * index.php
 * ---------
 */

include('inc/env.php');

$current_page = 'home';

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
          <form action="login.php" method="post"></form>
        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
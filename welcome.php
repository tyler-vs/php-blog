<?php
/**
 * welcome.php
 *
 * page that user is redirected to among successful login.
 */

define('PAGETITLE', 'welcome' );
include('inc/env.php');
 ?>
<?php include('templates/header.php'); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php print PAGETITLE; ?></h1>
        <p class="lead blog-description"></p>
      </div>

      <div class="row">

        <div class="eight columns blog-main">
          <p>Your logged in!</p>

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
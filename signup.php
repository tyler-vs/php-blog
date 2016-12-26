<?php
/**
 * signup.php
 * ----------
 *
 * page contains a form for potential new members to signup to
 * use the forum/social media/blog/dlc
 */

require('inc/env.php');

$current_page = 'signup';

 ?>
<?php require('templates/header.php'); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="eight columns blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Signup</h2>
            <p>Be apart of out forum and signup today!</p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
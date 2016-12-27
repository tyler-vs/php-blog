<?php
/**
 * about
 *
 * a page for describing the site
 */


define('PAGETITLE', ucfirst('about') );
require('inc/env.php');

// $current_page = 'about';

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
            <h2 class="blog-post-title">About Us</h2>
            <p>A blog built with PHP, HTML, CSS, JavaScript, and W3Schools and Larry Ullman's help and books!</p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php require('templates/footer.php'); ?>
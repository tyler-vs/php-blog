<?php
/**
 * about
 *
 * a page for describing the site
 */

// page specific variables
define('PAGE_TITLE', ucfirst('about') );
define('PAGE_DESCRIPTION', 'about this website.' );

 ?>
<?php require('templates/header.php'); ?>

        <div class="eight columns blog-main">

          <div class="blog-post">
            <h2>This site is a project</h2>
            <p>This site was made to learn about some of the core web development technologies and moreover to integrate them into a single yet simple project: a blog.</p>
            <p>The technologies mainly utilized here are HTMl, CSS, JS and PHP.</p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <?php include('templates/sidebar.php'); ?>

<?php require('templates/footer.php'); ?>
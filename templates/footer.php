<?php
/**
 * footer.php
 * ----------
 *
 * file can potentially contain sitemaps, legal documentation, colophones,
 * scripts...
 */
 ?>
    <footer class="blog-footer">
      <div class="container">
        <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>. &vert; <?php
        // output website version, not really,
        // if it is defined.
        if ( defined( 'VERSION' ) ) {
          print 'Running on ' . VERSION;
        } ?> &vert; <?php print date('Y'); ?></p>
        <p>
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>
    <?php
    if ( ERRLOG && (count($err_log_array) > 0) ) {
      print "<ul>";
      foreach ($err_log_array as $error => $value) {
        print "<li><b class=\"\">$error</b> &mdash; $value.</li>";
      }
      print "</ul>";
    }
     ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
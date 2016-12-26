<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>debug page</title>
</head>
<body>
<a href=".">go back</a> &vert; <a href="index.php">go home</a> &vert; <a href="css/">see css files</a> &vert; <a href="js/">view js files</a> &vert; <a href="reademe.txt">view readme file</a>.
<h1>debug page</h1>
<?php
//
// collect predefined PHP contants
// and output.
//

$debug_message = [];

// version of php being run
if ( defined( 'PHP_VERSION' ) ) {
  $debug_message[] = 'php version running is: <b>' . PHP_VERSION . '</b>';
}

// path to config php file
if (defined('PHP_CONFIG_FILE_PATH')) {
  $debug_message[] = 'path for the configuration file is: <b>' . PHP_CONFIG_FILE_PATH . '</b>';
}

// show operating system
if (defined('PHP_OS')) {
  $debug_message[] = 'the operating system php constant is: <b>' . PHP_OS . '</b>';
}

 ?>
<h3>php constants</h3>
includes predefined php constants, <a href="http://php.net/manual/en/errorfunc.constants.php">see more</a>.
<pre>
  <?php print_r($debug_message); ?>
</pre>
<hr>
<?php
// reset var to reuse again
$debug_message = array();
 ?>
<h3>time settings</h3>
<?php
$timezone = date('e');
print "time is set to: $timezone.";
 ?>
</body>
</html>
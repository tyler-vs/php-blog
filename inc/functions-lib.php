<?php
/**
 * functions lib
 * -------------
 *
 * a small collection of useful functions.
 *
 */

/**
 * table of contents
 * -----------------
 * 01 - form functions
 */


/**
 * 01 - form functions
 * -------------------
 */

// function to check is a value is coming from
// a post request and sanitizes the values.
function check_preset_value( $val ) {

  if (isset($_POST[$val])) {
    return htmlspecialchars($_POST[$val]);
  } else {
    return '';
  }
}


/**
 * [makeTextInput description]
 * @param  [type] $name        [description]
 * @param  [type] $label       [description]
 * @param  [type] $requestType [description]
 * @return [type]              [description]
 */

function make_form_input( $name, $label, $type = 'text' ) {

  // output the input
  print "<label for=\"$name\"> $label :\n";
  print "<input class=\"u-full-width\" type=\"$type\" name=\"$name\" value=\"";

  if ($type != 'password') {
    print check_preset_value($name) . "\">\n";
  } else {
    print "\">\n";
  }

  print "</label>\n";

}


// more functions go here...
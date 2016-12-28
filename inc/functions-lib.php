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
function preset_value( $val ) {
  /*if ( isset( $val ) ) {
    print htmlspecialchars($val);
  } else {
    print '';
  }*/
  if (isset($_POST[$val])) {
    print htmlspecialchars($_POST[$val]);
  }
}


/**
 * [makeTextInput description]
 * @param  [type] $name        [description]
 * @param  [type] $label       [description]
 * @param  [type] $requestType [description]
 * @return [type]              [description]
 */

function make_test_input( $name, $label, $form_request_type = 'POST' ) {

  // var to hold value
  $stickyValue = '';


  if ( strtoupper($requestType) == 'GET' ) {
    if (isset($_GET[$name])) {
      $stickyValue = htmlspecialchars($_GET[$name]);
    }
  } elseif ( strtoupper($requestType) == 'POST' ) {
    if (isset($_POST[$name])) {
      $stickyValue = htmlspecialchars($_POST[$name]);
    }
  } /*else {
    $stickyValue = htmlspecialchars($_POST[$name]);
  }*/

  // output the input
  print "<label for=\"$name\"> $label :\n";
  print "<input type=\"text\" name=\"$name\" value=\"$stickyValue\">\n";
  print "</label>\n";


}
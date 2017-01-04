<?php
/**
 * form functions
 *
 * Define system wide settings that can be easily changed. Define useful
 * constants that can be used by multiple scripts. Start a session. Establish
 * how errors will be handled.
 *
 */

function create_form_input($name, $type, $label = '', $errors = array(), $options = array(), $method = 'POST' ) {

  $value = false;
  if ( isset( $_POST[$name] ) ) {
    $value = $_POST[$name];
  }

  if ($value && get_magic_quotes_gpc() ) {
    $value = stripslashes($value);
  }

  print '<div class="form-group';
  if ( array_key_exists($name, $errors) ) {
    print ' has-error';
  }
  print '">'; //</div>"

  // print label if not empty
  if (!empty($label)) {
    print '<label for="' . $name . '" class="control-label">' . $label . '</label>';
  }

  // check for certain input type
  if ( ($type === 'text') ||
       ( $type === 'password' ) ||
       ( $type === 'email' ) ) {
    print '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" class="form-control"';

    // check for existing value
    if ($value) {
      print ' value="' . htmlspecialchars($value) . '"';
    }

    // check for additional options
    if (!empty($options) && is_array($options)) {
      foreach ($options as $key => $value) {
        print " $key=\"$value\"";
      }
    }

    print '>';

    // show error message if one exists
    if (array_key_exists($name, $errors)) {
      print '<span class="help-block">' . $errors[$name] . '</span>';
    }

  } elseif ( $type === 'textarea' ) { // input is a textarea

    // check if error exists to be displayed
    if (array_key_exists($name, $errors)) {
      print '<span class="help-block">' . $errors[$name] . '</span>';
    }

    // opening textarea
    print '<textarea name="' . $name . '" id="' . $name . '" class="form-control"';

    // add any additional options
    if (!empty($options) && is_array($options)) {
      foreach ($options as $key => $value) {
        print " $key=\"$value\"";
      }
    }

    // close opening textarea tag
    print '>';

    // check for value
    if ($value) {
      print $value;
    }

    // complete textarea input
    print '</textarea>';
  } // end if-elseif
  print '</div>';
} // End of create_form_input function

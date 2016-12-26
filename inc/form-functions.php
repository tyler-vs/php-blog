<?php
/**
 * form functions
 * --------------
 */

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

 ?>
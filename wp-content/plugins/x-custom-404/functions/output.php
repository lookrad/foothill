<?php

// =============================================================================
// FUNCTIONS/OUTPUT.PHP
// -----------------------------------------------------------------------------
// Plugin output.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Custom 404
//   02. Output
// =============================================================================

// Custom 404
// =============================================================================

function x_custom_404_output() {

  require( X_CUSTOM_404_PATH . '/views/site/custom-404.php' );

}



// Output
// =============================================================================

require( X_CUSTOM_404_PATH . '/functions/options.php' );

if ( isset( $x_custom_404_enable ) && $x_custom_404_enable == 1 ) {

  add_filter( '404_template', 'x_custom_404_output' );

}
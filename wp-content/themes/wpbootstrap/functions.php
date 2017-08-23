<?php


function my_assets() {

  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/vendor/bootstrap/js/bootstrap.min.js', array( 'popper', 'jquery' ) );
	wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/bootstrap/vendor/popper/popper.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . '/bootstrap/vendor/jquery-easing/jquery.easing.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/bootstrap/js/grayscale.min.js', array( 'popper', 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );



// <!-- Bootstrap core JavaScript -->
// <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
// <!-- <script src="vendor/popper/popper.min.js"></script> -->
// <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
//
// <!-- Plugin JavaScript -->
// <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
//
// <!-- Custom scripts for this template -->
// <!-- <script src="js/grayscale.min.js"></script> -->
?>

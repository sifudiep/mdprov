<?php 
    function load_files() {
        wp_enqueue_style("test_main_styles", get_stylesheet_uri());
        wp_enqueue_style("baloo-font", "https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap");
        wp_enqueue_style("ubuntu-font", "https://fonts.googleapis.com/css?family=Ubuntu&display=swap");
    }
    add_action("wp_enqueue_scripts", "load_files");

?>
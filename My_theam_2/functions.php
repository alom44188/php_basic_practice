<?php

function main_css(){
    wp_enqueue_style('style',get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','main_css');
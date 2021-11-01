<?php
/*
* Plugin Name: Hello Plug-in 
* Plugin URI: http://karlamariemoller.dk
* Description: Dette er et feelgood plugin bestående af HTML5, CSS, JS and PHP. Få folk til at tænke på en de har kær
* Version: 0.0.1
* Author: Emma, Sandie, Line & Karla
* Author URI: http://karlamariemoller.dk
* License: GPL2
*/

function feelgood_form()
{
    $content = '';
    $content .= '<div class="feel_good">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section class="formen">';
    $content .= '<h1 id="velkommen">HELLO</h1>';
    $content .= '<br>';
  	$content .= '<h5 id="tekst">Har du husket at skrive til en gammel ven i dag?</h5>';
    $content .= '<br>';
    $content .= '<p id="p">#oplevsammen</p>';
  	$content .= '</section>';
    $content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_feelgood_plugin','feelgood_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('oplev-sammen-plugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('oplev-sammen-plugin/js/script.js'), array('jquery'), null, true);
    }



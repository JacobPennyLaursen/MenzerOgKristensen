<?php

/*

* Plugin Name: Menzer og Kristensen katalog plug-in 
* Plugin URL: http://nodomin
* Description: This is a plug-in for the Menzer and Kristensen catalog
* Version: 0.0.1
* Author: Menzer and Kristensen
*Author URI: http://nodomain
*license: GPL2
*/


/*her begynder vores plug-in*/

function my_form()

{


$content = '';

$content .= '<form method="post" action="http://camillakoch.dk/menzerogkristensen/gratis-katalog-bestilt/">';  /*Her sørger vi for, at når man trykker på vores submit_knap kommer man videre til en "tak for bestillingsside*/

$content .= '<input type="text" name="fullname" placeholder="Dit navn" id="fullname">'; /*her laver vi en input hvor brugeren skal lave skrive sit navn*/

$content .= '<input type="email" name="emailaddress" placeholder="Din E-mail" id="emailadress" >'; /*her laver vi en input hvor brugeren skal skrive sin mail*/
    

    
$content .= '<input type="submit" name="submit_form" value="SEND KATALOG" id="submit">'; /*her laver vi vores knap som man trykker bestil katalog på*/
    
return $content;    
}

add_shortcode('show_form_plugin', 'my_form'); /*her laver vi den shortcode der skal skrives i wordpress for at få vores plugin frem på den pågældende side*/


/*her registrere vi vores stylesheet*/ 

add_action('wp_enqueue_scripts', 'register_plugin_styles');
    
function register_plugin_styles(){
    
wp_register_style('form_plugin_style', plugins_url('mkkatalog/css/style.css'));  /*her går vi tilbage i mkkatalog mappen, ind i css mappen og ind i style.css for at hente vores styles*/ 
    
wp_enqueue_style('form_plugin_style'); 
    
}

?>
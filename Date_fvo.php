<?php
/*
Plugin Name: Date_fvo
Plugin URI: https://mon-siteweb.com/
Description: Ceci est mon deuxieme plugin 
Author: VONTHRON Franck DW15
Version: 1.0
Author URI: http://mon-siteweb.com/
*/
function hello_date()
{
$date = date("d/m/Y");
$heure = date("H:i");
echo  "Nous somme le ".$date." il est ".$heure;
}
add_shortcode("Date_fvo","hello_date");

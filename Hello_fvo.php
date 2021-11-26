<?php
/*
Plugin Name: Hello_fvo
Plugin URI: https://mon-siteweb.com/
Description: Ceci est mon premier plugin 
Author: VONTHRON Franck DW15
Version: 1.0
Author URI: http://mon-siteweb.com/
*/
function hello_world()
{
echo  "hello ";
echo "world";
}
add_shortcode("Hello","hello_world");

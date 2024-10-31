<?php
/*
Plugin Name: Remove Prototype
Plugin URI: http://john010117.com/
Description: Removes prototype.js from wp_head()
Author: John McKenzie
Version: 1.0
Author URI: http://john010117.com/
*/

function remove_prototype()
{
	wp_deregister_script('prototype');
}
remove_prototype();
?>
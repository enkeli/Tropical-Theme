<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @theme tropical
 * @constants
 * This is an alternative/example theme for deyan shell. This file contains the constants wich will be passed to css files
 * You can declare any constant you want, and you would use it in the css like $vars['theme'][$constant]
 * 
 **/  
$imagesurl = elgg_get_site_url() . 'mod/' . deyan_get_theme_plugin($theme) . "/views/default/themes/$theme/images/";
$vars = array(

	/*********************
	      MAIN
	*********************/

	'background' 	=> "url($imagesurl\wallpaper.jpg)",
	'shadow' 	=> '#020',
	'border' 	=> '#b1bc37',


	/*********************
	      WINDOWS
	*********************/
	'window_background' 	=> '#629337',
	'window_main' 		=> '#cee07d',
	'window_module' 	=> 'rgba(100, 100, 100, .2)',



	/*********************
	      PANEL
	*********************/
	'panel_background' 	=> '#629337',


	/*********************
	      MISC
	*********************/
	'aviable' 	=> '#aea',
	'unaviable' 	=> '#555',
	'hover' 	=> '#fff',

	);
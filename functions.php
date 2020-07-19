<?php

if (function_exists('register_sidebar')) {
	register_sidebar(array('name' => 'Menu',
							'description' => '',
							'before_widget' => '',
							'after_widget' => ''));
	register_sidebar(array('name' => 'Banner',
							'description' => '',
							'before_widget' => '',
							'after_widget' => ''));
	register_sidebar(array('name' => 'Address',
							'description' => '',
							'before_widget' => '',
							'after_widget' => ''));

}

?>
<?php

	// Add Scripts
	function tsk_widget_add_scripts () {
		// add css
			wp_enqueue_style ('tsk_widget_main_style' , plugins_url() . '/tsk-widget/css/style.css');
		// add js
		wp_enqueue_script ('tsk_widget_main_script' , plugins_url() . '/tsk-widget/js/tsk-widget.js');
	}
	add_action ('wp_enqueue_scripts', 'tsk_widget_add_scripts');

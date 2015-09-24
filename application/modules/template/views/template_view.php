<?php

	//$menu['header_menu']=$header_menu;
	$this->load->view('header_View');

	$this->load->view($content_view);
	
	$this->load->view('footer_View');


?>
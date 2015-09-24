<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class template extends MY_Controller {

	public function index($data){
		$this->load_template($data);
	}
	public function load_template($data){
		$this->load->view('template_view',$data);
	}
	public function load_template_headerless($data){
		$this->load->view('template_menuless_view',$data);
	}
}
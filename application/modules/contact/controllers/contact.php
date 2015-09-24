<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class contact extends MY_Controller{

	public function index(){
		$this->contact_us();
	}

	function contact_us(){

		$data['content_view'] = 'contact/contact_v';
		$data['link'] = 'contact';
		$data = array_merge($data,$this->load_libraries(array()));

		$this->template($data);
	}
}
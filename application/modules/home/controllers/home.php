<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class home extends MY_Controller {

	public function index(){
		$this->home_page();
	}

	function home_page(){

		$data['content_view'] = 'home/home_v';
		$data['link'] = 'home';
		$data = array_merge($data,$this->load_libraries(array('angular-js')));

		$this->template($data);
	}
}
?>
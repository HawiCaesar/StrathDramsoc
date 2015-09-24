<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class productions extends MY_Controller{

	public function index(){
		$this->previous_productions();
	}

	function previous_productions(){

		$data['content_view'] = 'productions/productions_v';
		$data['link'] = 'productions';
		$data = array_merge($data,$this->load_libraries(array('angular-js','restangular-js')));

		$this->template($data);
	}

	function get_previous_productions(){
		$this->load->model('productions_m');

		$the_food=$this->productions_m->get_productions();

		$this->output->set_content_type('application/json')->set_output(json_encode($the_food,JSON_PRETTY_PRINT));
	}

}
?>
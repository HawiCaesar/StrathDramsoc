<?php defined('BASEPATH') OR exit('No direct script access allowed');
/* The MX_Controller class is autoloaded as required */
 /*
 * @package		sql
 * @author		Brian Hawi Odhiambo
 * @email 		brianhawi92@gmail.com
 * @usage 		
 */
class MY_Controller extends MX_Controller{

protected function template($data) {
	$this -> load -> module('template');
	$this -> template -> load_template($data);
	}
protected function template_menuless($data)
{
	$this -> load -> module('template');
	$this -> template -> load_template($data);
}

	public function load_libraries($arr){

		array_unshift($arr, "jquery","semantic-ui");
				
		$libs['js_files']				=	array();		
		$libs['css_files']				=	array();			
		$libs['js_plugin_files']		=	array();
		$libs['css_plugin_files']		=	array();

		$asset_path		=	$this->config->item('asset_path');

		$css_path		=	$this->config->item('asset_path');
		$js_path		=	$this->config->item('js_path');
		$plugin_path	=	$this->config->item('plugin_path');

		$all_css		=	$this->config->item('css_files');
		$all_js			=	$this->config->item('js_files');
		$all_plugin_css	=	$this->config->item('plugin_css_files');
		$all_plugin_js	=	$this->config->item('plugin_js_files');

		//load css
		foreach ($arr as $css) {
			foreach($all_css as $all){
				if($css==$all['title']){
					$libs['css_files']			=	array_merge($libs['css_files'],array($all['file']));
				}
			}
		}

		//load js
		foreach ($arr as $js) {
			foreach($all_js as $all){
				if($js==$all['title']){
					$libs['js_files']			=	array_merge($libs['js_files'],array($all['file']));
				}
			}
		}
		//load plugin css
		foreach ($arr as $css) {
			foreach($all_plugin_css as $all){
				if($css==$all['title']){
					$libs['css_plugin_files']	=	array_merge($libs['css_plugin_files'],array($all['file']));
				}
			}
		}
		//load plugin js
		foreach ($arr as $js) {
			foreach($all_plugin_js as $all){
				if($js==$all['title']){
					$libs['js_plugin_files']	=	array_merge($libs['js_plugin_files'],array($all['file']));

				}
			}
		}
		
		
		return 	$libs;
	}

	function logout()
	{
		$this -> session -> sess_destroy();
		redirect("home");
	}


}

?>
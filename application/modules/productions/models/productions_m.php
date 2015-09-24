<?php

class productions_m extends CI_Model{

	function  get_productions(){

		$productions_array = array(
									array(
										'sysnopsis' =>  'In a bid to revenge her brother, Vera finds herself torn between 			            her love for a man and her love
										   					for a nation. Tasked with saving Kenya, her oath is put to the test when love threatens to hold her captive. She must choose democracy over her heart. She must choose public services over marriage. She must choose to kill before she can dare to love. Can the fate of a nation be put in the hands of a girl smitten by love?Will Vera choose rebellion over tyranny? Will love prevail over death?',
										   	'image' => 'vera.jpg'),
									array(
										'sysnopsis' =>  'On the morning of the Bishop\'s daughter\'s wedding to a town commoner, events unfold that will change the views about marriage in this society forever. In a conflict of diverging views, the Famadi family thus seeks to draw up an all-inclusive marriage contract, in a bid to formulate the ideal marriage. The conversation that ensues thereafter opens a Pandora\'s box that women, particularly in this society, had been waiting long enough to open. Addressing issues on marriage life, religion, law, culture and feminism. Can a woman love more than one man? Is marriage necessary? What dictates what a marriage is? Ultimately,what is the ideal marriage?',
										'image' => 'getting_married.jpg'),
									array( 
										'sysnopsis' =>  'On the morning of the Bishop\'s daughter\'s wedding to a town commoner, events unfold that will change the views about marriage in this society forever. In a conflict of diverging views, the Famadi family thus seeks to draw up an all-inclusive marriage contract, in a bid to formulate the ideal marriage. The conversation that ensues thereafter opens a Pandora\'s box that women, particularly in this society, had been waiting long enough to open. Addressing issues on marriage life, religion, law, culture and feminism. Can a woman love more than one man? Is marriage necessary? What dictates what a marriage is? Ultimately,what is the ideal marriage?',
										'image' => 'cherry_orchard.jpg')

									);
	return $productions_array;
	}
}
?>
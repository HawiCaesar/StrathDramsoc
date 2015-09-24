<?php
class MY_Model extends CI_Model{
	public $partner_tests_sql_delimiter 		=		"";
	public $partner_devices_sql_delimiter 		=		"";
	public $partner_facilities_sql_delimiter 	=		"";

	public $regional_tests_sql_delimiter 		=		"";
	public $regional_devices_sql_delimiter 		=		"";
	public $regional_facilities_sql_delimiter 	=		"";

	public $district_tests_sql_delimiter 		=		"";
	public $district_devices_sql_delimiter 		=		"";
	public $district_facilities_sql_delimiter 	=		"";

	public function __construct(){
		parent::__construct();

	}

	public function get_month_name($month){
		$d= "01";	
		$y= date('Y');
		$m=$month;
		return date('M',strtotime($y.'-'.$m.'-'.$d));
	}

	//Facilities
	public function get_details($name,$user_filter_used){
        
		$this->config->load('sql');
		$preset_sql = $this->config->item("preset_sql");
		$sql 	=	$preset_sql[$name];
		$user_group_id = $this->session->userdata("user_group_id");
		
     //user filters
     if($user_filter_used >0){			

			$user_delimiter = "";

			if($user_group_id == 3){
				$user_delimiter = " AND `partner_id` = '".$user_filter_used."' ";
			}elseif ($user_group_id == 9) {
				$user_delimiter = " AND `region_id` = '".$user_filter_used."' ";
			}elseif ($user_group_id == 8) {
				$user_delimiter = " AND `district_id` = '".$user_filter_used."' ";
			}elseif ($user_group_id == 6) {
				$user_delimiter = " AND `facility_id` = '".$user_filter_used."' ";
			}
			$sql .=	$user_delimiter;
		}
	 
	 //echo $sql;
		return R::getAll($sql);

	}
	public function get_details1($name,$user_filter_used){
        
		$this->config->load('sql');
		$preset_sql = $this->config->item("preset_sql");
		$sql 	=	$preset_sql[$name];
		$user_group_id = $this->session->userdata("user_group_id");
		$user_delimiter = "";
     //user filters
    	
     
     if($user_filter_used >0){			

			
            if($user_group_id == 3){
				$user_delimiter = " AND `partner_id` = '".$user_filter_used."'ORDER BY 	`upload_date` DESC ";
			}elseif ($user_group_id == 9) {
				$user_delimiter = " AND `region_id` = '".$user_filter_used."' ORDER BY 	`upload_date` DESC";
			}elseif ($user_group_id == 8) {
				$user_delimiter = " AND `district_id` = '".$user_filter_used."' ORDER BY 	`upload_date` DESC";
			}elseif ($user_group_id == 6) {
				$user_delimiter = " AND `facility_id` = '".$user_filter_used."' ORDER BY 	`upload_date` DESC";
			}elseif ($user_group_id ==1 AND $user_group_id ==2 AND $user_group_id ==4 AND $user_group_id ==5 AND $user_group_id ==7) {
				$user_filter_used."' ORDER BY 	`upload_date` DESC";
			}
			$sql .=	$user_delimiter;
		}
	 
	 //echo $sql;
		return R::getAll($sql);

	}
	//users
	public function find_user_group_name($id){
		$sql 	=	"SELECT `user_group`.`name` FROM `user_group` WHERE `user_group`.`id` = '$id'";
		$res 	=	R::getAll($sql);
		$name 	= "";

		foreach ($res as $index) {
			$name = $index['name'];
		}

		return $name;
	}
	public function get_user_sql_join_delimiter($details,$column_to_join){// $details can be either tests_details, equipment_details, 
		$user_filter_used 	=	$this->session -> userdata("user_filter_used");
		$user_group_id 		=	$this->session -> userdata("user_group_id");

		$this->config->load('sql');

		$preset_sql = $this->config->item("preset_sql");
		$sql_delimiter 	=	"";

		if($user_group_id == 3|| $user_group_id == 6|| $user_group_id == 8 || $user_group_id == 9){
			if($user_filter_used==0){
				return "";
			}elseif($details=="tests_details"){
				$sql_delimiter = $preset_sql[$details];
				$sql_delimiter ="RIGHT JOIN (".$sql_delimiter.") AS `filter_details`
									ON ".$column_to_join." = `filter_details`.`cd4_test_id`
								";
			}elseif($details=="equipment_details"){
				$sql_delimiter = $preset_sql[$details];
				$sql_delimiter ="RIGHT JOIN (".$sql_delimiter.") AS `filter_details`
									ON ".$column_to_join." = `filter_details`.`facility_equipment_id`
								";
			}			
			return $sql_delimiter;
		}else{
			return "";
		}

	}
	public function get_user_sql_where_delimiter(){
		$user_filter_used 	=	$this->session -> userdata("user_filter_used");

		$user_group_id 		=	$this->session -> userdata("user_group_id");

		$this->config->load('sql');

		$sql_where_delimiter 	=	"";

		if($user_group_id == 3|| $user_group_id == 6|| $user_group_id == 8 || $user_group_id == 9){
			if($user_filter_used==0){
				return "";
			}elseif($user_group_id == 3){
				$where_column = "partner_id";	
				$sql_where_delimiter = "AND `filter_details`.`$where_column` = '$user_filter_used' ";						
			}elseif($user_group_id == 6){
				$where_column = "facility_id";	
				$sql_where_delimiter = "AND `filter_details`.`$where_column` = '$user_filter_used' ";
			}elseif($user_group_id == 8){
				$where_column = "district_id";	
				$sql_where_delimiter = "AND `filter_details`.`$where_column` = '$user_filter_used' ";					
			}elseif($user_group_id == 9){
				$where_column = "region_id";	
				$sql_where_delimiter = "AND `filter_details`.`$where_column` = '$user_filter_used' ";						
			}
			return $sql_where_delimiter;
		}else{
			return "";
		}
	}

 public function sql_user_delimiter($user_group_id,$user_filter_used){
		$user_delimiter = "";

		if($user_filter_used >0){		

			if($user_group_id == 3){
				$user_delimiter = " AND `partner_id` = '".$user_filter_used."' ";
			}elseif ($user_group_id == 9) {
				$user_delimiter = " AND `region_id` = '".$user_filter_used."' ";
			}elseif ($user_group_id == 8) {
				$user_delimiter = " AND `district_id` = '".$user_filter_used."' ";
			}elseif ($user_group_id == 6) {
				$user_delimiter = " AND `facility_id` = '".$user_filter_used."' ";
			}
		}
		return $user_delimiter;
	}public function GetMonthName($month)
		{
			$monthname="";

			 if ($month==1)
			 {
			     $monthname="January";
			 }
			  else if ($month==2)
			 {
			     $monthname="February";
			 }else if ($month==3)
			 {
			     $monthname="March";
			 }else if ($month==4)
			 {
			     $monthname="April";
			 }else if ($month==5)
			 {
			     $monthname="May";
			 }else if ($month==6)
			 {
			     $monthname="June";
			 }else if ($month==7)
			 {
			     $monthname="July";
			 }else if ($month==8)
			 {
			     $monthname="August";
			 }else if ($month==9)
			 {
			     $monthname="September";
			 }else if ($month==10)
			 {
			     $monthname="October";
			 }else if ($month==11)
			 {
			     $monthname="November";
			 }
			  else if ($month==12)
			 {
			     $monthname="December";
			 }
			  else if ($month==13)
			 {
			     $monthname=" Jan - Sep  ";
			 }
			return $monthname;
		}
	
}
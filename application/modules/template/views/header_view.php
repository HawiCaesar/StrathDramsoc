<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />	
    <link rel="SHORTCUT ICON" href="<?php //echo base_url().'img/naslogo.jpg';?>">
    <title>Dramsoc | <?php //echo $title;?></title>
    <?php      	
		$this->load->view('utils/dynamicLoads');
	?>	
  	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular&subset=Latin,Cyrillic">
</head>

<body style='font-family: Ubuntu, sans-serif;'>

  <div class="ui inverted segment">
    <!-- <img class="ui mini centered image" src="<?php echo base_url('assets/img/dramsoc.jpg'); ?>"> -->
    <h2 class="ui center aligned icon header">Strathmore Drama Society</h2>
    <div class="ui inverted fluid three item secondary pointing menu">
      <a class="<?php if($link == 'home'){echo 'active';} ?> item" href="<?php echo base_url() ?>">To Be Staged</a>
      <a class="<?php if($link == 'productions'){echo 'active';} ?> item" href="<?php echo base_url() ?>productions">Previous Productions</a>
      <a class="<?php if($link == 'contact'){echo 'active';} ?> item" href="<?php echo base_url() ?>contact">Contact Us</a>
    </div>
  </div>

	<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($page_name)) {echo $page_name .' - Sales And Inventory System';} else echo "Cooperative" ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css')?>">
	
	
  <!-- Favicons -->
  
  <link href="<?php echo base_url();?>assets/Home/img/favicon.png" rel="icon">
  
  <link href="<?php echo base_url();?>assets/Home/img/apple-touch-icon.png" rel="apple-touch-icon">
	
</head>
<body>
<header style="height: 70px; background: #343a40; color: white;" class="">
	<?php
		$cur_date = date('l, F Y');
		if ($this->session->userdata('log_in')) {
			?>
			<p class="lead" style="float: right; padding-right: 15px; margin-top: 11px;"><?php echo $cur_date ?> | <?php echo $this->session->userdata('username') ?></p>
			<?php
		}
	?>
	
	<div style="padding-left: 20px; padding-top: 1px;">
		<h2><a style="color: white; font-size: 35px; text-decoration: none;"href="<?php echo base_url(); ?>home_con/home">Cooperative</a></h2>
	</div>
</header>
<div class="row" style="margin-bottom: -10px;">
<div class="container-fluid main-content" >


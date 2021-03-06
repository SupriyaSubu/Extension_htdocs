<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/h_style.css">
</head>
<body>
	
	<div class="modal-header">
		<h1 class="logo">
			<img src="<?php echo base_url(); ?>assets/images/icon.png" alt="Extension" class="logo-icon">Scraping Extension 
			<!-- <span class="version">(1.0.0)</span> -->
			<div class="modal-content">
			<h6 style="width: 250px;">Welcome - <?php echo $this->session->userdata('exname'); ?></h6>
			</div>
		</h1>
	</div>
	<!-- <div class="modal-content">
		<p>Easily Scrap any website content</p> -->
	<!-- </div> -->
	<div class="modal-icons">
		<div class="flex-container" style="padding-left: 79px;width: 150px;">
			<div class="flex">
				<a href="<?php echo base_url();?>LogReg/url" target="_self">
					<img src="<?php echo base_url(); ?>assets/images/extract.jpg"><h6 style="padding-left: 10;margin-top: 0.855;margin-top: 4px;">Extract</h6>
				</a>
			</div>
			<div class="flex">
				<a href="https://www.extension.com" target="_blank">	
					<img src="<?php echo base_url(); ?>assets/images/upload.png" style="height: 32px; width: 40px; padding: 10px;"><h6 style="padding-right: 0px;margin-top: 2px;margin-bottom: 1px;width: 55px;">Upload</h6>
				</a>
			</div>
		</div>
	</div>
	
	<div>
		<br><br>
		<br><br>
		<h5>Note:</h5>
		<p><img src="<?php echo base_url(); ?>assets/images/extract.jpg" style="height: 20px; width: 20px;">	  using this option you can extract the web content by giving the url of the relevent webpage you 		want! and the select the product you really want to be scrap and you will get the product   	details as Zip file.<br><br>
		 <img src="<?php echo base_url(); ?>assets/images/upload.png" style="height: 15px; width: 20px;"> with this option you can choose the Zip file were going to be upload into your own webpage.
		</p>
	</div>
	
	<br>
	<div>
	<label class="logout"><button><a href="<?php echo base_url(); ?>LogReg/logout" style="color: #2f5876; ">
		<b>Logout</b></a></button></label>
	</div>
		
</body>
</html>
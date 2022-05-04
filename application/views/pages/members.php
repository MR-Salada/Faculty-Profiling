<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>General User</title>
	<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css') ?>">
	<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
	<?php $this->load->view('pages/navbar'); ?>
	
	<div class="container mt-5 border" style="">
	<?php $this->load->view('pages/personalprofile'); ?>
	<?php $this->load->view('pages/facultyprofile'); ?>
		<!-- This is for the Education Table -->
		<hr>
	<?php $this->load->view('pages/educationalbackground'); ?>
		<hr>
	<?php $this->load->view('pages/eligibilities'); ?>
		<hr>
	<?php $this->load->view('pages/workexp'); ?>
		<hr>
	<?php $this->load->view('pages/seminarandtraining'); ?>
		
	</div>
</body>
</html>
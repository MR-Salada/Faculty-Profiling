<?php $this->load->view('templates/header'); ?>
	<?php $this->load->view('pages/navbar'); ?>
	
	<div class="container my-5 py-3 border " style="">
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

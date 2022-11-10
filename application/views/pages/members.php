<?php $this->load->view('templates/header'); ?>
	<?php $this->load->view('pages/navbar'); ?>
	
	<div class="container my-5 py-3 " style="">
	<?php $this->load->view('pages/personalprofile'); ?>
	<?php $this->load->view('pages/facultyprofile'); ?>
		<!-- This is for the Education Table -->
		<br>

	<div class="accordion"  id="accordionExample">
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingOne">
	      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	        <strong>Educational Background</strong>
	      </button>
	    </h2>
	    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <?php $this->load->view('pages/educationalbackground'); ?>
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingTwo">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	        <strong>Eligibilities</strong>
	      </button>
	    </h2>
	    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <?php $this->load->view('pages/eligibilities'); ?>
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingThree">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	        <strong>Employment Profile</strong>
	      </button>
	    </h2>
	    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <?php $this->load->view('pages/workexp'); ?>
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingFour">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	        <strong>Seminars and Trainings</strong>
	      </button>
	    </h2>
	    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
	      <div class="accordion-body">
	        <?php $this->load->view('pages/seminarandtraining'); ?>
	      </div>
	    </div>
	  </div>
	</div>
	
			
	</div>
<?php $this->load->view('templates/footer'); ?>

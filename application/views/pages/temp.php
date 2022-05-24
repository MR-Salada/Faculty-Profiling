<ul class="nav nav-tabs mt-5" id="facultyReportSummaryTab" role="tablist">
	  <li class="nav-item" role="presentation">
	    <button class="nav-link active" id="allFaculty-tab" data-bs-toggle="tab" data-bs-target="#allFaculty" type="button" role="tab" aria-controls="allFaculty" aria-selected="true">All Faculty</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="bat-tab" data-bs-toggle="tab" data-bs-target="#bat" type="button" role="tab" aria-controls="bat" aria-selected="false">BAT</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="bsba-tab" data-bs-toggle="tab" data-bs-target="#bsba" type="button" role="tab" aria-controls="bsba" aria-selected="false">BSBA</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="teed-tab" data-bs-toggle="tab" data-bs-target="#teed" type="button" role="tab" aria-controls="teed" aria-selected="false">TEED</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="bscs-tab" data-bs-toggle="tab" data-bs-target="#bscs" type="button" role="tab" aria-controls="bscs" aria-selected="false">BSCS</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="bshm-tab" data-bs-toggle="tab" data-bs-target="#bshm" type="button" role="tab" aria-controls="bshm" aria-selected="false">BSCS</button>
	  </li>
	</ul>
	<div class="tab-content" id="facultyReportSummaryTabContent">
	  <div class="tab-pane fade show active" id="allFaculty" role="tabpanel" aria-labelledby="allFaculty-tab">
	  	<div class="card-group">
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Gender</h5>
		    <div class="card-body">
	    	
	    	  <canvas id="allFacultygender" width="400" height="400"></canvas>
				
		      <h5 class="card-text">Male: <?= count($allfaculty_male) ?></h5>
		      <h5 class="card-text">Female: <?= count($allfaculty_female) ?></h5>
		    </div>
		  </div>
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Education</h5>
		    <div class="card-body">
		      <h5 class="card-text">Doctorate: <?= count($allfaculty_getdoctorate) ?></h5>
		      <h5 class="card-text">Master's: <?= count($allfaculty_getmaster) ?></h5>
		      <h5 class="card-text">Bachelor's: <?= count($allfaculty_male) ?></h5>
		  	</div>
		  </div>
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Employment Status</h5>
		    <div class="card-body">
		      <h5 class="card-text">Permanent: <?= count($allfaculty_getpermanent) ?></h5>
		      <h5 class="card-text">Temporary Permanent: <?= count($allfaculty_gettemppermanent) ?></h5>
		      <h5 class="card-text">Contract of Service: <?= count($allfaculty_getcos) ?></h5>
		    </div>
		  </div>
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Academic Rank</h5>
		    <div class="card-body">
		      <h5 class="card-text">Professor: <?= count($allfaculty_getprofessor) ?></h5>
		      <h5 class="card-text">Associate Professor: <?= count($allfaculty_getasscprofessor) ?></h5>
		      <h5 class="card-text">Assistant Professor: <?= count($allfaculty_getassiprofessor) ?></h5>
		      <h5 class="card-text">Instructor: <?= count($allfaculty_instructor) ?></h5>
		    </div>
		  </div>
		</div>
	  </div>

	  <div class="tab-pane fade" id="bat" role="tabpanel" aria-labelledby="bat-tab">
	  	<div class="card-group">
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Gender</h5>
		    <div class="card-body">
		      <h5 class="card-text">Male: <?= count($bat_getmale) ?></h5>
		      <h5 class="card-text">Female: <?= count($allfaculty_female) ?></h5>
		    </div>
		  </div>
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Education</h5>
		    <div class="card-body">
		      <h5 class="card-text">Doctorate: <?= count($allfaculty_getdoctorate) ?></h5>
		      <h5 class="card-text">Master's: <?= count($allfaculty_getmaster) ?></h5>
		      <h5 class="card-text">Bachelor's: <?= count($allfaculty_male) ?></h5>
		  	</div>
		  </div>
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Employment Status</h5>
		    <div class="card-body">
		      <h5 class="card-text">Permanent: <?= count($allfaculty_getpermanent) ?></h5>
		      <h5 class="card-text">Temporary Permanent: <?= count($allfaculty_gettemppermanent) ?></h5>
		      <h5 class="card-text">Contract of Service: <?= count($allfaculty_getcos) ?></h5>
		    </div>
		  </div>
		  <div class="card">
		  	<h5 class="card-header bg-success text-light">Academic Rank</h5>
		    <div class="card-body">
		      <h5 class="card-text">Professor: <?= count($allfaculty_getprofessor) ?></h5>
		      <h5 class="card-text">Associate Professor: <?= count($allfaculty_getasscprofessor) ?></h5>
		      <h5 class="card-text">Assistant Professor: <?= count($allfaculty_getassiprofessor) ?></h5>
		      <h5 class="card-text">Instructor: <?= count($allfaculty_instructor) ?></h5>
		    </div>
		  </div>
		</div>
	  </div>

	  <div class="tab-pane fade" id="bsba" role="tabpanel" aria-labelledby="bsba-tab">c</div>
	  <div class="tab-pane fade" id="teed" role="tabpanel" aria-labelledby="teed-tab">d</div>
	  <div class="tab-pane fade" id="bscs" role="tabpanel" aria-labelledby="bscs-tab">e</div>
	  <div class="tab-pane fade" id="bshm" role="tabpanel" aria-labelledby="bshm-tab">f</div>
	</div>
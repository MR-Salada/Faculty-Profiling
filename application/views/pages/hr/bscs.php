<?php $this->load->view('templates/header'); ?>
<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top" aria-label="Fourth navbar example">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">NEMSU-TC</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsExample04">
			<form>
				<input class="form-control" type="text" placeholder="Search" aria-label="Search">
			</form>
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Instruction</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Research Extension</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Others</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown04">
						<li><a class="dropdown-item" href="#">My Evaluation</a></li>
						<li><a class="dropdown-item" href="#">Document Hive</a></li>
					</ul>
				</li> -->
			</ul>
			<div class="btn-group">
				<a class=" nav-link secondary dropdown-toggle" style="color: white; cursor: pointer;" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
					<?php echo $userinfos->name ?>
				</a>
				<ul class="dropdown-menu dropdown-menu-lg-end">
					<li><a class="dropdown-item" href="<?php echo site_url('/auth/logout') ?>">Logout</a></li>
					
				</ul>
			</div>
		</div>
	</div>
</nav>
<div class="container mt-5 pt-5">

	<h2 class="text-center"><strong>Faculty Report Summary</strong></h2>
	<h5 class="text-center"><?= $title ?></h5>
	<!-- Nav tabs -->
	
	<div class="row mt-5 border">
		<div class="col col-3 border">
			<div class="row mt-5 p-3">
				<div id="list-example" class="list-group">
				  <a class="list-group-item list-group-item-action" href="<?= site_url('hr/') ?>">All Faculty</a>
				  <a class="list-group-item list-group-item-action" href="<?= site_url('hr/bat') ?>">BAT</a>
				  <a class="list-group-item list-group-item-action" href="<?= site_url('hr/bsba') ?>">BSBA</a>
				  <a class="list-group-item list-group-item-action"  href="<?= site_url('hr/teed') ?>">TEED</a>
				  <a class="list-group-item list-group-item-action bg-success text-light" href="<?= site_url('hr/bscs') ?>">BSCS</a>
				  <a class="list-group-item list-group-item-action" href="<?= site_url('hr/bshm') ?>">BSHM</a>
				</div>

			</div>
		</div>
		<div class="col col-9 mt-5">
			<div class="card">
				<h5 class="card-header bg-success text-light">Gender</h5>
				<div class="card-body">
					<div class="row">
						<div class="col">
							<h5 class="card-text">Male: <?= count($bscs_getmale) ?></h5>
							<h5 class="card-text">Female: <?= count($bscs_getfemale) ?></h5>
						</div>
						<div class="col">
							<canvas id="bscsgender" width="200" height="100"></canvas>	
						</div>
					</div>	
				</div>
			</div>
			<div class="card mt-2">
			  	<h5 class="card-header bg-success text-light">Education</h5>
			    <div class="card-body">
			    	<div class="row">
			    		<div class="col">
			    			<h5 class="card-text">Doctorate: <?= count($bscs_getdoctorate) ?></h5>
					      	<h5 class="card-text">Master's: <?= count($bscs_getmaster) ?></h5>
					      	<h5 class="card-text">Bachelor's: <?= count($bscs_getbachelor) ?></h5>
			    		</div>
			    		<div class="col">
							<canvas id="bscseducation" width="200" height="100"></canvas>
			    		</div>
			    	</div>
			  	</div>
			</div>
			<div class="card mt-2">
			  	<h5 class="card-header bg-success text-light">Employment Status</h5>
			    <div class="card-body">
			    	<div class="row">
			    		<div class="col">
			    			<h5 class="card-text">Permanent: <?= count($bscs_getpermanent) ?></h5>
					      	<h5 class="card-text">Temporary Permanent: <?= count($bscs_gettemppermanent) ?></h5>
					      	<h5 class="card-text">Contract of Service: <?= count($bscs_getcos) ?></h5>
			    		</div>
			    		<div class="col">
							<canvas id="bscsemploymentstat" width="200" height="100"></canvas>
			    		</div>
			    	</div>
			  	</div>
			</div>
			<div class="card mt-2">
			  	<h5 class="card-header bg-success text-light">Academic Rank</h5>
			    <div class="card-body">
			    	<div class="row">
			    		<div class="col">
							<h5 class="card-text">Professor: <?= count($bscs_getprofessor) ?></h5>
							<h5 class="card-text">Associate Professor: <?= count($bscs_getasscprofessor) ?></h5>
							<h5 class="card-text">Assistant Professor: <?= count($bscs_getassiprofessor) ?></h5>
							<h5 class="card-text">Instructor: <?= count($bscs_instructor) ?></h5>
			    		</div>
			    		<div class="col">
							<canvas id="bscsacadrank" width="200" height="100"></canvas>
			    		</div>
			    	</div>
			  	</div>
			</div>
		</div>
		<!-- <div class="col col-3 mt-5">
			<canvas id="allFacultygender" width="100" height="100"></canvas><br>
			<canvas id="allFacultyeducation" width="100" height="100"></canvas>
		</div> -->

	</div>
</div>

<script>
	const ctxbscs = document.getElementById('bscsgender').getContext('2d');
	const myChart = new Chart(ctxbscs, {
	    type: 'bar',
	    data: {
	        labels: ['Male', 'Female'],
	        datasets: [{
	            label: '',
	            data: [<?= count($bscs_getmale) ?>, <?= count($bscs_getfemale) ?>],
	            backgroundColor: [
	                '#3b76ff',
	                '#ff3b58'
	            ],
	            borderColor: [
	                '#002885',
	                '#7a0012'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	        	x: {
			        stacked: true,
			    },

	            y: {
	            	ticks: {
	            		stepSize: 1,
	            		beginAtZero: true,
	            		
	            	},

	            stacked: true,
	               
	            }
	        },
	        plugins: {
				title: {
	                display: true,
	                text: 'Gender Chart',
	                padding: {
	                    top: 10,
	                    bottom: 30
	                }
	            }, 
	            legend: {
	            	display: false,
	            }

	        }	
	        
	    }
	});
	const ctxbscseducation = document.getElementById('bscseducation').getContext('2d');
	const myCharta = new Chart(ctxbscseducation, {
	    type: 'bar',
	    data: {
	        labels: ['Doctorate', "Master's", "Bachelor's"],
	        datasets: [{
	            label: '',
	            data: [<?= count($bscs_getdoctorate) ?>, <?= count($bscs_getmaster) ?>, <?= count($bscs_getbachelor) ?>],
	            backgroundColor: [
	                '#3b76ff',
	                '#ff3b58',
	                '#1e8a1e'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            y: {
	                ticks: {
	            		stepSize: 1,
	            		beginAtZero: true,
	            	}
	            }
	        },
	        plugins: {
				title: {
	                display: true,
	                text: 'Education Chart',
	                padding: {
	                    top: 10,
	                    bottom: 30
	                }
	            }, 
	            legend: {
	            	display: false,
	            }

	        }	
	    }
	});
	const ctxbscsemploymentstat = document.getElementById('bscsemploymentstat').getContext('2d');
	const myChartb = new Chart(ctxbscsemploymentstat, {
	    type: 'bar',
	    data: {
	        labels: ['Permanent', "Temporary Permanent", "Contract of Service"],
	        datasets: [{
	            label: '',
	            data: [<?= count($bscs_getpermanent) ?>, <?= count($bscs_gettemppermanent) ?>, <?= count($bscs_getcos) ?>],
	            backgroundColor: [
	                '#3b76ff',
	                '#ff3b58',
	                '#1e8a1e'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            y: {
	                ticks: {
	            		stepSize: 1,
	            		beginAtZero: true,
	            	}
	            }
	        },
	        plugins: {
				title: {
	                display: true,
	                text: 'Employment Status Chart',
	                padding: {
	                    top: 10,
	                    bottom: 30
	                }
	            }, 
	            legend: {
	            	display: false,
	            }

	        }	
	    }
	});
	const ctxbscsacadrank = document.getElementById('bscsacadrank').getContext('2d');
	const myChartc = new Chart(ctxbscsacadrank, {
	    type: 'bar',
	    data: {
	        labels: ['Professor', "Associate Professor", "Assistant Professor", "Instructor"],
	        datasets: [{
	            label: '',
	            data: [<?= count($bscs_getprofessor) ?>, <?= count($bscs_getasscprofessor) ?>, <?= count($bscs_getassiprofessor) ?>, <?= count($bscs_instructor) ?>],
	            backgroundColor: [
	                '#3b76ff',
	                '#ff3b58',
	                '#1e8a1e',
	                '#fc039d'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            y: {
	                ticks: {
	            		stepSize: 1,
	            		beginAtZero: true,
	            	}
	            }
	        },
	        plugins: {
				title: {
	                display: true,
	                text: 'Academic Rank Chart',
	                padding: {
	                    top: 10,
	                    bottom: 30
	                }
	            }, 
	            legend: {
	            	display: false,
	            }

	        }	
	    }
	});
	
</script>
<?php $this->load->view('templates/footer'); ?>
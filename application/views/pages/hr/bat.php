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
	<!-- Nav tabs -->
	
	<div class="row mt-5 border">
		<div class="col col-3 border">
			<div class="row mt-5 p-3">
				<div id="list-example" class="list-group">
				  <a class="list-group-item list-group-item-action" href="<?= site_url('hr/') ?>">All Faculty</a>
				  <a class="list-group-item list-group-item-action" href="<?= site_url('hr/') ?>">BAT</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
				  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
				</div>

			</div>
		</div>
		<div class="col col-3 mt-5">
			<div class="card">
				<h5 class="card-header bg-success text-light">Gender</h5>
				<div class="card-body">					
					<h5 class="card-text">Male: <?= count($bat_getmale) ?></h5>
					<h5 class="card-text">Female: <?= count($bat_getmale) ?></h5>
				</div>
			</div>
		</div>
		<div class="col col-6"><canvas id="allFacultygender" width="400" height="200"></canvas></div>

	</div>
</div>


<?php $this->load->view('templates/footer'); ?>
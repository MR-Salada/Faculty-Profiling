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
	<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="#">Company Name</a>
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
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">View my...</a>
	            <ul class="dropdown-menu" aria-labelledby="dropdown04">
	              <li><a class="dropdown-item" href="#">Attendance</a></li>
	              <li><a class="dropdown-item" href="#">Evaluation</a></li>
	            </ul>
	          </li>
	        </ul>
	        <div class="btn-group">
			  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
			    <?php echo $userinfos->name ?>
			  </button>
			  <ul class="dropdown-menu dropdown-menu-lg-end">
			    <li><a class="dropdown-item" href="<?php echo site_url('/auth/logout') ?>">Logout</a></li>
			    
			  </ul>
			</div>
	      </div>
	    </div>
  	</nav>
	
	<div class="container mt-3 border">
		<div class="row py-3">
			<div class="col col-2">
				<img src="<?php echo site_url('assets/images/default.jpg') ?>" width="150" alt="userimage">
			</div>
			<div class="col col-6 ">
				<h5><?php echo $userinfos->name ?></h5>
				<p><?php echo $userinfos->designation ?> <br> <?php echo $userinfos->phone ?> <br> <?php echo $userinfos->email ?></p>
			</div>
			<div class="col col-4">
				<a href="" class="btn btn-primary" title="">Edit Details</a>
			</div>
		</div>
	</div>
</body>
</html>
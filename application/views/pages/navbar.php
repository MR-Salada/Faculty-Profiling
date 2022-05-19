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
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Others</a>
	            <ul class="dropdown-menu" aria-labelledby="dropdown04">
	              <li><a class="dropdown-item" href="#">My Evaluation</a></li>
	              <li><a class="dropdown-item" href="#">Document Hive</a></li>
	            </ul>
	          </li>
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
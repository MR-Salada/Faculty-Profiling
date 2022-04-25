<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<a href="<?php echo site_url('auth/create_user') ?>" class="btn btn-primary" title="">Create</a>

	<div class="container">
		<div class="row">
			<?php foreach ($users as $user): ?>
				<div class="col col-3">
					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $user->name ?></h5>
					    <p class="card-text"><?php echo $user->email ?></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
			<?php endforeach ?>
			

		</div>
	</div>
	

</body>
</html>
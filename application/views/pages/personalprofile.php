		<div class="row py-3">
			<div class="col col-2">
				<img src="<?php echo site_url('assets/images/default.jpg') ?>" width="150" alt="userimage">
			</div>
			<div class="col col-6 ">
				<h4><strong>Personal Profile</strong></h4>
				<p><?php echo $userinfos->name ?> <br> <?php echo $userinfos->designation ?> <br> <?php echo $userinfos->phone ?> <br> <?php echo $userinfos->email ?></p>
				<!-- Button trigger modal -->
				<button type="button" class="btn rounded-pill btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  Basic Profile
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">See more basic profiles</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        other details
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>

			</div>
			<div class="col col-4">
				<a href="#" class="btn rounded-pill btn-primary" title="">Edit Details</a>
			</div>
		</div>
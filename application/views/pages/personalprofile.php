		<div class="row py-3">
			<div class="col col-2">
				<img class="rounded-circle" src="<?php echo site_url('assets/images/') ?><?= $userinfos->profilepic ?>" width="150" height="150" alt="User Image" data-bs-toggle="modal" data-bs-target="#profile">

				<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profile" aria-hidden="true" >
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="editProfilePic">Edit Profile Picture</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<form action="members/upload_file" method="post" enctype="multipart/form-data">
				        <input type="text" name="user_id" value="<?= $userinfos->id ?>" hidden>
				        <div class="mb-3">
						  <label for="formFile" class="form-label">Default file input example</label>
						  <input class="form-control" type="file" id="image" name="image">

						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Save Changes</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col col-6 ">
				<h4><strong><?php echo $userinfos->name ?></strong></h4>
				<p><?php echo $userinfos->title ?> <?= $userinfos->designation ?> <br> <?php echo $userinfos->phone ?> <br> <?php echo $userinfos->email ?></p>
				<!-- Button trigger modal -->
				<!-- <button type="button" class="btn rounded-pill btn-success" data-bs-toggle="modal" data-bs-target="#viewmore">
				  See more...
				</button>
 -->
				<!-- View Modal -->
				<div class="modal fade" id="viewmore" tabindex="-1" aria-labelledby="editProfilePic" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="editProfilePic">See more basic profiles</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<div class="row readonly">
				      		<div class="col">
				      			<div class="mb-3">
								    <label for="name" class="form-label">Name</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->name ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="birthday" class="form-label">Birthday</label>
								    <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $userinfos->birthday ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="birthplace" class="form-label">Birthplace</label>
								    <input type="text" class="form-control" id="birthplace" value="<?= $userinfos->birthplace ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="age" class="form-label">Age</label>
								    <input type="number" class="form-control" id="age" value="<?= $userinfos->age ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="gender" class="form-label">Gender</label>
								    <input type="text" class="form-control" id="gender" value="<?= $userinfos->gender ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="civilstat" class="form-label">Civil Status</label>
								    <input type="text" class="form-control" id="civilstat" value="<?= $userinfos->civilstat ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="height" class="form-label">Height</label>
								    <input type="text" class="form-control" id="height" value="<?= $userinfos->height ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="weight" class="form-label">Weight</label>
								    <input type="text" class="form-control" id="weight" value="<?= $userinfos->weight ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="bloodtype" class="form-label">Blood Type</label>
								    <input type="text" class="form-control" id="bloodtype" value="<?= $userinfos->bloodtype ?>" disabled>
								</div>
				      		</div>
				      		<div class="col">
								<div class="mb-3">
								    <label for="name" class="form-label">Citizenship</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->citizenship ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">Address</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->address ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">Contact Number</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->phone ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">Email Address</label>
								    <input type="text" class="form-control" id="name"value="<?= $userinfos->email ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">GSIS</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->gsis ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">PhilHealth</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->philhealth ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">SSS</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->sss ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">Pag-IBIG</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->pagibig ?>" disabled>
								</div>
								<div class="mb-3">
								    <label for="name" class="form-label">TIN</label>
								    <input type="text" class="form-control" id="name" value="<?= $userinfos->tin ?>" disabled>
								</div>
				      		</div>
				      	</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>

				<!-- Edit Modal -->
				<div class="modal fade" id="editbasicinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">See more basic profiles</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <form action="<?= site_url('members/edit_basic_info') ?>/<?= $userinfos->id ?>" method="POST">
					      <div class="modal-body">
					      	<div class="row">
					      		<div class="col">
					      			<div class="mb-3">
									    <label for="name" class="form-label">Name</label>
									    <input type="text" class="form-control" id="name" name="name" value="<?= $userinfos->name ?>" >
									</div>
									<div class="mb-3">
									    <label for="birthday" class="form-label">Birthday</label>
									    <input type="date" class="form-control" id="birthday" name="birthday" name="name" value="<?= $userinfos->birthday ?>" >
									</div>
									<div class="mb-3">
									    <label for="birthplace" class="form-label">Birthplace</label>
									    <input type="text" class="form-control" id="birthplace" name="birthplace" value="<?= $userinfos->birthplace ?>" >
									</div>
									<div class="mb-3">
									    <label for="age" class="form-label">Age</label>
									    <input type="number" class="form-control" id="age" name="age" value="<?= $userinfos->age ?>" >
									</div>
									<div class="mb-3">
									    <label for="gender" class="form-label">Gender</label>
									    <select class="form-select" name="gender">
										  <option selected value="<?= $userinfos->gender ?>"><?= $userinfos->gender ?></option>
										  <option value="Male">Male</option>
										  <option value="Female">Female</option>
										</select>
									</div>
									<div class="mb-3">
									    <label for="civilstat" class="form-label">Civil Status</label>
									    <input type="text" class="form-control" id="civilstat" name="civilstat" value="<?= $userinfos->civilstat ?>" >
									</div>
									<div class="mb-3">
									    <label for="height" class="form-label">Height</label>
									    <input type="text" class="form-control" id="height" name="height" value="<?= $userinfos->height ?>" >
									</div>
									<div class="mb-3">
									    <label for="weight" class="form-label">Weight</label>
									    <input type="text" class="form-control" id="weight" name="weight" value="<?= $userinfos->weight ?>" >
									</div>
									<div class="mb-3">
									    <label for="bloodtype" class="form-label">Blood Type</label>
									    <input type="text" class="form-control" id="bloodtype" name="bloodtype" value="<?= $userinfos->bloodtype ?>" >
									</div>
					      		</div>
					      		<div class="col">
									<div class="mb-3">
									    <label for="citizenship" class="form-label">Citizenship</label>
									    <input type="text" class="form-control" id="citizenship"  name="citizenship" value="<?= $userinfos->citizenship ?>" >
									</div>
									<div class="mb-3">
									    <label for="address" class="form-label">Address</label>
									    <input type="text" class="form-control" id="address" name="address" value="<?= $userinfos->address ?>" >
									</div>
									<div class="mb-3">
									    <label for="phone" class="form-label">Contact Number</label>
									    <input type="text" class="form-control" id="phone" name="phone" value="<?= $userinfos->phone ?>" >
									</div>
									<div class="mb-3">
									    <label for="email" class="form-label">Email Address</label>
									    <input type="email" class="form-control" id="email" name="email" value="<?= $userinfos->email ?>" >
									</div>
									<div class="mb-3">
									    <label for="gsis" class="form-label">GSIS</label>
									    <input type="text" class="form-control" id="gsis" name="gsis" value="<?= $userinfos->gsis ?>" >
									</div>
									<div class="mb-3">
									    <label for="philhealth" class="form-label">PhilHealth</label>
									    <input type="text" class="form-control" id="philhealth" name="philhealth" value="<?= $userinfos->philhealth ?>" >
									</div>
									<div class="mb-3">
									    <label for="sss" class="form-label">SSS</label>
									    <input type="text" class="form-control" id="sss" name="sss" value="<?= $userinfos->sss ?>" >
									</div>
									<div class="mb-3">
									    <label for="pagibig" class="form-label">Pag-IBIG</label>
									    <input type="text" class="form-control" id="pagibig" name="pagibig" value="<?= $userinfos->pagibig ?>" >
									</div>
									<div class="mb-3">
									    <label for="tin" class="form-label">TIN</label>
									    <input type="text" class="form-control" id="tin" name="tin" value="<?= $userinfos->tin ?>" >
									</div>
					      		</div>
					      	</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
					        <button type="submit" class="btn btn-success">Save Changes</button>
					      </div>
					  </form>
				    </div>
				  </div>
				</div>


			</div>
			<!-- <div class="col col-4">
				<button type="button" class="btn rounded-pill btn-warning" data-bs-toggle="modal" data-bs-target="#editbasicinfo">
				  Edit Basic Info
				</button>
			</div> -->


		</div>
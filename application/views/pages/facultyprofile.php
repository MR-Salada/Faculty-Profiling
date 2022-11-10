		<div class="row">
			<div class="col col-3 border">
				<h4><strong>Faculty Profile</strong></h4>
				<p><?php echo $userinfos->college ?> <br> <?= $userinfos->program ?> <br> <?= $userinfos->fieldofdiscipline ?> <br> <?= $userinfos->designation ?> <br> <?= $userinfos->academicrank ?> <br> <?= $userinfos->yearsofteaching ?> year/s of teaching</p>
				<!-- Button trigger modal -->
				<!-- <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#facultyprofile">
				  Edit Field
				</button> -->

				<!-- Modal -->
				<div class="modal fade" id="facultyprofile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="staticBackdropLabel">Edit Faculty Profile</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				    <div class="modal-body">
				      	<form action="<?= site_url('members/update_faculty_profile') ?>/<?= $userinfos->id ?>" method="POST">
				      		<div class="mb-2 row">
							    <label for="college" class="col-sm-3 col-form-label">College</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="college" name="college" value="<?= $userinfos->college ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="program" class="col-sm-3 col-form-label">Program</label>
							    <div class="col-sm-9">
							    	<select class="form-select" aria-label="Program" name="program">
									  	<option selected value="<?= $userinfos->program ?>"><?= $userinfos->program ?></option>
									  	<option value="BAT">BAT</option>
									  	<option value="BSBA">BSBA</option>
									  	<option value="TEED">TEED</option>
									  	<option value="BSCS">BSCS</option>
									  	<option value="BSHM">BSHM</option>
									</select>
							    </div>
							</div>
							
							<div class="mb-2 row">
							    <label for="designation" class="col-sm-3 col-form-label">Designation</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="designation" name="designation" value="<?= $userinfos->designation ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="field_of_discipline" class="col-sm-3 col-form-label">Field of Discipline</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="field_of_discipline" name="fieldofdiscipline" value="<?= $userinfos->fieldofdiscipline ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="academicrank" class="col-sm-3 col-form-label">Academic Rank</label>
							    <div class="col-sm-9">
							    	<select class="form-select" aria-label="Program" name="academicrank">
									  	<option selected value="<?= $userinfos->academicrank ?>"><?= $userinfos->academicrank ?></option>
									  	<option value="Professor">Professor</option>
									  	<option value="Associate Professor">Associate Professor</option>
									  	<option value="Assistant Professor">Assistant Professor</option>
									  	<option value="Instructor">Instructor</option>
									</select>
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="yearsofteaching" class="col-sm-3 col-form-label">Years of Teaching </label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="yearsofteaching" name="yearsofteaching" value="<?= $userinfos->yearsofteaching ?>">
							    </div>
							</div>
				      	
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-success">Confirm Changes</button>
				      </div>
				      	</form>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col col-9 border">
				<h5><strong>Overview</strong></h5>
				
				<div class="">
					 <textarea class="form-control mb-2" name="overview" placeholder="Leave you overview here" id="overview" style="height: 200px" readonly><?= $userinfos->overview ?></textarea>
					 				
					 <!-- Button trigger modal -->
					<!-- <button type="button" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#editoverview">
					  Edit Overview
					</button> -->

					<!-- Modal -->
					<div class="modal fade" id="editoverview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="staticBackdropLabel">Update my Overview</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        <p>Sometimes it’s okay to show off and brag a little bit — your overview is one of those times. This is where you set the tone for your whole profile — show your personality and a reason to read more about your incredible skills and experience. But don’t go too long.</p>
							<ol class="list-group mb-3">
							  <li class="list-group-item list-sm list-group-item-success">Describe your strengths and skills</li>
							  <li class="list-group-item list-group-item-success">Highlight accomplishments and recognition</li>
							  <li class="list-group-item list-group-item-success">Keep it short and make sure it's error-free</li>
							</ol>
							<form action="members/updateoverview" method="POST">				
								 <textarea class="form-control mb-2" name="overview" placeholder="Leave you overview here" id="overview" style="height: 200px"><?= $userinfos->overview ?></textarea>
								 <input type="text" name="user_id" value="<?= $userinfos->id ?>" hidden>
								 
							
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Change</button>
					      </div>
					       </form>
					    </div>
					  </div>
					</div>
				</div>
				
			</div>

		</div>

		
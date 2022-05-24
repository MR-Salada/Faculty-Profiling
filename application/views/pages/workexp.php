		<div>
			<h4 class="mt-3 text-center"><strong>Employment Profile</strong></h4>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnewworkexp">
			  Add New Work Experience
			</button>

			<!-- Modal -->
			<div class="modal fade" id="addnewworkexp" tabindex="-1" aria-labelledby="addnewworkexpLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Add New Work Experience</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <form action="<?= site_url('members/add_work_exp') ?>" method="POST">
			      <div class="modal-body">
			      	
		      		<input type="text"  name="user_id" value="<?= $userinfos->id ?>" hidden>
					<div class="mb-2 row">
					    <label for="company" class="col-sm-3 col-form-label">Company</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="company" name="company">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="datefrom" class="col-sm-3 col-form-label">Date From</label>
					    <div class="col-sm-9">
					      <input type="date"  class="form-control" id="datefrom" name="datefrom">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="dateto" class="col-sm-3 col-form-label">Date To</label>
					    <div class="col-sm-9">
					      <input type="date"  class="form-control" id="dateto" name="dateto">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="salary" class="col-sm-3 col-form-label">Salary</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="salary" name="salary">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="position" class="col-sm-3 col-form-label">Position</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="position" name="position">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="statusofemployment" class="col-sm-3 col-form-label">Status of Employment</label>
					    <div class="col-sm-9">
					      	<select class="form-select" name="statusofemployment">
							  	<option selected value="">Open to select menu</option>
							  	<option value="Permanent">Permanent</option>
							  	<option value="Temporary Permanent">Temporary Permanent</option>
							 	<option value="Contract of Service">Contract of Service</option>
							</select>
					    </div>
					</div>
			      	
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-success">Add Work Experience</button>
			      </div>
			      </form>
			    </div>
			  </div>
			</div>
			<table class="table align-middle mb-0 border">
			  <thead class="bg-light">
			    <tr>
			      <th>Company</th>
			      <th>Date of Emploment(from)</th>
			      <th>Date of Emploment(to)</th>
			      <th>Salary</th>
			      <th>Position</th>
			      <th>Status of Employment</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($workexps as $row): ?>
			  		<tr>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->company ?></p>
					    </td>
					    <td>
					        <p class="fw-normal mb-1"><?= date('F d, Y', strtotime($row->datefrom)); ?></p>
					    </td>
					    <td>
					        <p class="fw-normal mb-1"><?= date('F d, Y', strtotime($row->dateto)); ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->salary ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->position ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->statusofemployment ?></p>
					    </td>
					    <td>
					        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit_workexp<?=$row->id?>">
					          Edit
					        </button>
					        <button type="button" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#delete_workexp<?=$row->id?>">
					          Delete
					        </button>
					    </td>
					</tr>

					<div class="modal fade" id="edit_workexp<?=$row->id?>" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Edit Work Experience</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="<?= site_url('members/update_workexp')?>/<?=$row->id?>" method="POST">
								<div class="modal-body">
									<div class="mb-2 row">
									    <label for="company" class="col-sm-3 col-form-label">Company</label>
									    <div class="col-sm-9">
									      <input type="text"  class="form-control" id="company" name="company" value="<?= $row->company ?>">
									    </div>
									</div>
									<div class="mb-2 row">
									    <label for="datefrom" class="col-sm-3 col-form-label">Date of Employment (From)</label>
									    <div class="col-sm-9">
									      <input type="date"  class="form-control" id="datefrom" name="datefrom" value="<?= $row->datefrom ?>">
									    </div>
									</div>
									<div class="mb-2 row">
									    <label for="dateto" class="col-sm-3 col-form-label">Date of Employment (To)</label>
									    <div class="col-sm-9">
									      <input type="date"  class="form-control" id="dateto" name="dateto" value="<?= $row->dateto ?>">
									    </div>
									</div>
									<div class="mb-2 row">
									    <label for="salary" class="col-sm-3 col-form-label">Salary</label>
									    <div class="col-sm-9">
									      <input type="text"  class="form-control" id="salary" name="salary" value="<?= $row->salary ?>">
									    </div>
									</div>
									<div class="mb-2 row">
									    <label for="position" class="col-sm-3 col-form-label">Position</label>
									    <div class="col-sm-9">
									      <input type="text"  class="form-control" id="position" name="position" value="<?= $row->position ?>">
									    </div>
									</div>
									<div class="mb-2 row">
									    <label for="statusofemployment" class="col-sm-3 col-form-label">Status of Employment</label>
									    <div class="col-sm-9">
									      <input type="text"  class="form-control" id="statusofemployment" name="statusofemployment" value="<?= $row->statusofemployment ?>">
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
					<form action="<?php echo site_url('members/delete_workexp') ?>/<?php echo $row->id ?>" method="POST">
			            <div class="modal fade" id="delete_workexp<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			              <div class="modal-dialog modal-dialog-centered">
			                <div class="modal-content">
			                  <div class="modal-header">
			                    <h5 class="modal-title" id="exampleModalLabel">DELETING WORK EXPERIENCE RECORD!</h5>
			                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			                  </div>
			                  <div class="modal-body p-4 text-center">
			                    <h3 class="mb-0">Are you sure?</h3>
			                    <p class="mb-0">Do you really want to delete these record? This process cannot be undone.</p>
			                  </div>
			                  <div class="modal-footer flex-nowrap  justify-content-center">
			                    <button type="button" class="btn btn-success form-control" data-bs-dismiss="modal">Cancel</button>
			                    <button type="submit" class="btn btn-danger form-control">Delete</button>
			                  </div>
			                </div>
			              </div>
			            </div>
			        </form>

			  	<?php endforeach ?>
			   
			   
			  </tbody>
			</table>
		</div>
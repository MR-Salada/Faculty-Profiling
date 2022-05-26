		<div>
			<h4 class="mt-3 text-center"><strong>Educational Background</strong></h4>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addneweducation">
			  Add New Education
			</button>

			<!-- Modal -->
			<div class="modal fade" id="addneweducation" tabindex="-1" aria-labelledby="addneweducationLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Add New Education</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <form action="<?= site_url('members/add_education') ?>" method="POST" >
			      <div class="modal-body">
			      		<input type="text"  name="user_id" value="<?= $userinfos->id ?>" hidden>
			      		<input type="text"  name="program" value="<?= $userinfos->program ?>" hidden>
			      		<div class="mb-2 row">
						    <label for="school" class="col-sm-3 col-form-label">School</label>
						    <div class="col-sm-9">
						      <input type="text"  class="form-control" id="school" name="school">
						    </div>
						</div>
						<div class="mb-2 row">
						    <label for="datefrom" class="col-sm-3 col-form-label">Year Attended (From)</label>
						    <div class="col-sm-9">
						      <input type="number"  class="form-control" id="datefrom" name="datefrom">
						    </div>
						</div>
						<div class="mb-2 row">
						    <label for="dateto" class="col-sm-3 col-form-label">Year Attended (To)</label>
						    <div class="col-sm-9">
						      <input type="number"  class="form-control" id="dateto" name="dateto">
						    </div>
						</div>
						<div class="mb-2 row">
						    <label for="degree" class="col-sm-3 col-form-label">Degree</label>
						    <div class="col-sm-9">
						      <select class="form-select" aria-label="Default select example" name="degree">
								  <option selected>Open this select menu</option>
								  <option value="Bachelor">Bachelor</option>
								  <option value="Master">Master</option>
								  <option value="Doctoral">Doctoral</option>
							  </select>
						    </div>
						</div>
						<div class="mb-2 row">
						    <label for="areaofstudy" class="col-sm-3 col-form-label">Area Of Study</label>
						    <div class="col-sm-9">
						      <input type="text"  class="form-control" id="areaofstudy" name="areaofstudy">
						    </div>
						</div>
			      	
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>
			      </form>
			    </div>
			  </div>
			</div>
			<table class="table align-middle mb-0 border">
			  <thead class="bg-light">
			    <tr>
			      <th>School</th>
			      <th>Year Attended From</th>
			      <th>Year Attended To</th>
			      <th>Degree</th>
			      <th>Area of Study</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($education as $row): ?>
			  		<tr>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->school ?></p>
					    </td>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->datefrom ?></p>
					    </td>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->dateto ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->degree ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->areaofstudy ?></p>
					    </td>
					    <td>
					        <button type="button" class="btn btn-warning btn-sm " data-bs-toggle="modal" data-bs-target="#edit_education<?=$row->id?>">
					          Edit
					        </button>
					        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_education<?=$row->id?>">
					          Delete
					        </button>
					    </td>
					</tr>

					<!-- Modal -->
					<div class="modal fade" id="edit_education<?=$row->id?>" tabindex="-1" aria-labelledby="edit_education" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <form action="<?= site_url('members/update_education') ?>/<?= $row->id ?>" method="POST" >
					      <div class="modal-body">
					      		<input type="text"  name="user_id" value="<?= $userinfos->id ?>" hidden>
					      		<div class="mb-2 row">
								    <label for="school" class="col-sm-3 col-form-label">School</label>
								    <div class="col-sm-9">
								      <input type="text"  class="form-control" id="school" name="school" value="<?= $row->school ?>">
								    </div>
								</div>
								<div class="mb-2 row">
								    <label for="degree" class="col-sm-3 col-form-label">Degree</label>
								    <div class="col-sm-9">
								      <select class="form-select" aria-label="Default select example" name="degree">
										  <option selected><?= $row->degree ?></option>
										  <option value="Bachelor">Bachelor</option>
										  <option value="Master">Master</option>
										  <option value="Doctoral">Doctoral</option>
									  </select>
								    </div>
								</div>
								<div class="mb-2 row">
								    <label for="areaofstudy" class="col-sm-3 col-form-label">Area Of Study</label>
								    <div class="col-sm-9">
								      <input type="text"  class="form-control" id="areaofstudy" name="areaofstudy" value="<?= $row->areaofstudy ?>">
								    </div>
								</div>
								<div class="mb-2 row">
								    <label for="datefrom" class="col-sm-3 col-form-label">Year Attended (From)</label>
								    <div class="col-sm-9">
								      <input type="number"  class="form-control" id="datefrom" name="datefrom" value="<?= $row->datefrom ?>">
								    </div>
								</div>
								<div class="mb-2 row">
								    <label for="dateto" class="col-sm-3 col-form-label">Year Attended (To)</label>
								    <div class="col-sm-9">
								      <input type="number"  class="form-control" id="dateto" name="dateto" value="<?= $row->dateto ?>">
								    </div>
								</div>
								
					      	
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
					      </form>
					    </div>
					  </div>
					</div>

					<form action="<?php echo site_url('members/delete_education') ?>/<?php echo $row->id ?>" method="POST">
			            <div class="modal fade" id="delete_education<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			              <div class="modal-dialog modal-dialog-centered">
			                <div class="modal-content">
			                  <div class="modal-header">
			                    <h5 class="modal-title" id="exampleModalLabel">DELETING EDUCATION RECORD!</h5>
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
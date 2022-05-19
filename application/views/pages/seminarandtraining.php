		<div>
			<h3 class="mt-3 text-center"><strong>Seminars and Trainings</strong></h3>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnewsemandtra">
			  Add New Seminar or Training
			</button>

			<!-- Modal -->
			<div class="modal fade" id="addnewsemandtra" tabindex="-1" aria-labelledby="addnewsemandtraLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Add Seminar or Trainings</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <form action="<?= site_url('members/add_seminarandtrainings') ?>" method="POST" accept-charset="utf-8">
			      <div class="modal-body">
		      		<input type="text"  name="user_id" value="<?= $userinfos->id ?>" hidden>
			        <div class="mb-2 row">
					    <label for="title" class="col-sm-3 col-form-label">Title</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="title" name="title">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="datefrom" class="col-sm-3 col-form-label">Date (from)</label>
					    <div class="col-sm-9">
					      <input type="date"  class="form-control" id="datefrom" name="datefrom">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="dateto" class="col-sm-3 col-form-label">Date (To)</label>
					    <div class="col-sm-9">
					      <input type="date"  class="form-control" id="dateto" name="dateto">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="numhours" class="col-sm-3 col-form-label">Number of Hours</label>
					    <div class="col-sm-9">
					      <input type="number"  class="form-control" id="numhours" name="numhours">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="sponsor" class="col-sm-3 col-form-label">Sponsor</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="sponsor" name="sponsor">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="venue" class="col-sm-3 col-form-label">Venue</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="venue" name="venue">
					    </div>
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-success">Add</button>
			      </div>
			  	  </form>
			    </div>
			  </div>
			</div>
			<table class="table align-middle mb-0 border">
			  <thead class="bg-light">
			    <tr>
			      <th>Title</th>
			      <th>Date (from)</th>
			      <th>Date (to)</th>
			      <th>Number of Hours</th>
			      <th>Sponsored By</th>
			      <th>Venue</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($semandtra as $row): ?>
			  		<tr>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->title ?></p>
					    </td>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->datefrom ?></p>
					    </td>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->dateto ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->numhours ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->sponsor ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->venue ?></p>
					    </td>
					    <td>
					        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit_semandtra<?=$row->id?>">
					          Edit
					        </button>
					        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_semandtra<?= $row->id ?>">
					          Delete
					        </button>
					    </td>
					</tr>

					<!-- Modal -->
					<div class="modal fade" id="edit_semandtra<?=$row->id?>" tabindex="-1"  aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Seminar or Trainings</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <form action="<?= site_url('members/edit_seminarandtrainings') ?>" method="POST" accept-charset="utf-8">
					      <div class="modal-body">
				      		<input type="text"  name="user_id" value="<?= $userinfos->id ?>" hidden>
					        <div class="mb-2 row">
							    <label for="title" class="col-sm-3 col-form-label">Title</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="title" name="title" value="<?= $row->title ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="datefrom" class="col-sm-3 col-form-label">Date (from)</label>
							    <div class="col-sm-9">
							      <input type="date"  class="form-control" id="datefrom" name="datefrom" value="<?= $row->datefrom ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="dateto" class="col-sm-3 col-form-label">Date (To)</label>
							    <div class="col-sm-9">
							      <input type="date"  class="form-control" id="dateto" name="dateto" value="<?= $row->dateto ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="numhours" class="col-sm-3 col-form-label">Number of Hours</label>
							    <div class="col-sm-9">
							      <input type="number"  class="form-control" id="numhours" name="numhours" value="<?= $row->numhours ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="sponsor" class="col-sm-3 col-form-label">Sponsor</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="sponsor" name="sponsor" value="<?= $row->sponsor ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="venue" class="col-sm-3 col-form-label">Venue</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="venue" name="venue" value="<?= $row->venue ?>">
							    </div>
							</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-success">Add</button>
					      </div>
					  	  </form>
					    </div>
					  </div>
					</div>
					<!-- DELETE MODAL -->

					<form action="<?php echo site_url('members/delete_semandtra') ?>/<?php echo $row->id ?>" method="POST">
			            <div class="modal fade" id="delete_semandtra<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			              <div class="modal-dialog modal-dialog-centered">
			                <div class="modal-content">
			                  <div class="modal-header">
			                    <h5 class="modal-title" id="exampleModalLabel">DELETING SEMINAR OR TRAINING RECORD!</h5>
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
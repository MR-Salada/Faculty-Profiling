<div>
	<h4 class="mt-3 text-center"><strong>Eligibilities</strong></h4>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addneweligibility">
	Add New Eligibility
	</button>
	<!-- Modal -->
	<div class="modal fade" id="addneweligibility" tabindex="-1" aria-labelledby="addneweligibilityLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Eligibility</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= site_url('members/add_eligibility') ?>" method="POST">
				<div class="modal-body">
		      		<input type="text"  name="user_id" value="<?= $userinfos->id ?>" hidden>
					<div class="mb-2 row">
					    <label for="license" class="col-sm-3 col-form-label">Licensure</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="license" name="license">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="rate" class="col-sm-3 col-form-label">Rating/Remarks</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="rate" name="rate">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="date" class="col-sm-3 col-form-label">Date</label>
					    <div class="col-sm-9">
					      <input type="date"  class="form-control" id="date" name="date">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="placeofexam" class="col-sm-3 col-form-label">Place of Exam</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="placeofexam" name="placeofexam">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="licensenumber" class="col-sm-3 col-form-label">License Number</label>
					    <div class="col-sm-9">
					      <input type="text"  class="form-control" id="licensenumber" name="licensenumber">
					    </div>
					</div>
					<div class="mb-2 row">
					    <label for="date" class="col-sm-3 col-form-label">Validity</label>
					    <div class="col-sm-9">
					      <input type="date"  class="form-control" id="validity" name="validity">
					    </div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Add Eligibility</button>
				</div>
				</form>

			</div>
		</div>
	</div>
	<table class="table align-middle mb-0 border">
		<thead class="bg-light">
			<tr>
				<th>Licensure</th>
				<th>Rating/Remarks</th>
				<th>Date</th>
				<th>Place of Examination</th>
				<th>License Number</th>
				<th>Date of Validity</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($eligibilities as $row): ?>
			<tr>
				<td>
					<p class="fw-normal mb-1"><?= $row->license ?></p>
				</td>
				<td>
					<p class="fw-normal mb-1"><?= $row->rate ?></p>
				</td>
				<td>
					<p class="fw-normal mb-1"><?= date('F d, Y', strtotime($row->date)); ?></p>
				</td>
				<td>
					<p class="fw-normal mb-1"><?= $row->placeofexam ?></p>
				</td>
				<td>
					<p class="fw-normal mb-1"><?= $row->licensenumber ?></p>
				</td>
				<td>
					<p class="fw-normal mb-1"><?= date('F d, Y', strtotime($row->validity)); ?></p>
				</td>
				<td>
					<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit_eligibility<?=$row->id?>">
					Edit
					</button>
					<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_eligibility<?= $row->id ?>">
					Delete
					</button>
				</td>
			</tr>
			<div class="modal fade" id="edit_eligibility<?=$row->id?>" tabindex="-1" aria-labelledby="addneweligibilityLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Eligibility</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<form action="<?= site_url('members/update_eligibility') ?>/<?=$row->id?>" method="POST">
						<div class="modal-body">
							<div class="mb-2 row">
							    <label for="license" class="col-sm-3 col-form-label">Licensure</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="license" name="license" value="<?= $row->license ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="rate" class="col-sm-3 col-form-label">Rating/Remarks</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="rate" name="rate" value="<?= $row->rate ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="date" class="col-sm-3 col-form-label">Date</label>
							    <div class="col-sm-9">
							      <input type="date"  class="form-control" id="date" name="date" value="<?= $row->date ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="placeofexam" class="col-sm-3 col-form-label">Place of Exam</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="placeofexam" name="placeofexam" value="<?= $row->placeofexam ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="licensenumber" class="col-sm-3 col-form-label">License Number</label>
							    <div class="col-sm-9">
							      <input type="text"  class="form-control" id="licensenumber" name="licensenumber" value="<?= $row->licensenumber ?>">
							    </div>
							</div>
							<div class="mb-2 row">
							    <label for="date" class="col-sm-3 col-form-label">Validity</label>
							    <div class="col-sm-9">
							      <input type="date"  class="form-control" id="validity" name="validity" value="<?= $row->validity?>">
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

			<form action="<?php echo site_url('members/delete_eligibility') ?>/<?php echo $row->id ?>" method="POST">
	            <div class="modal fade" id="delete_eligibility<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	              <div class="modal-dialog modal-dialog-centered">
	                <div class="modal-content">
	                  <div class="modal-header">
	                    <h5 class="modal-title" id="exampleModalLabel">DELETING ELIGIBILITY RECORD!</h5>
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
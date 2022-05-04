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
			      <div class="modal-body">
			        ...
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
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
					        <p class="fw-normal mb-1"><?= $row->date ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->placeofexam ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->licensenumber ?></p>
					    </td>
					    <td>
					      	<p class="fw-normal mb-1"><?= $row->validity ?></p>
					    </td>
					    <td>
					        <button type="button" class="btn btn-warning btn-sm">
					          Edit
					        </button>
					        <button type="button" class="btn btn-danger btn-sm">
					          Delete
					        </button>
					    </td>
					</tr>
			  	<?php endforeach ?>
			   
			   
			  </tbody>
			</table>
		</div>
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
			        <h5 class="modal-title" id="exampleModalLabel">Add New Work Experience</h5>
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
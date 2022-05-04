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
					        <p class="fw-normal mb-1"><?= $row->datefrom ?></p>
					    </td>
					    <td>
					        <p class="fw-normal mb-1"><?= $row->dateto ?></p>
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
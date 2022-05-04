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
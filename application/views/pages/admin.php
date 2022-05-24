<?php $this->load->view('templates/header'); ?>
  <?php $this->load->view('pages/navbar'); ?>

<div class="container my-5 py-5 border " style="">
  <button type="button" class="btn btn-success">Add New User</button>
  <table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
         <tr>
          <td>
            <div class="d-flex align-items-center">
              <img
                  src="<?= site_url('assets/images/') ?><?= $user->profilepic ?>"
                  alt="Profile Picture"
                  style="width: 45px; height: 45px"
                  class="rounded-circle"
                  />
              <div class="ms-3">
                <p class="fw-bold mb-1"><?= $user->name ?></p>
                <p class="text-muted mb-0"><?= $user->email ?></p>
              </div>
            </div>
          </td>
          <td>
            <p class="fw-normal mb-1"><?= $user->designation ?></p>
            <!-- <p class="text-muted mb-0">IT department</p> -->
          </td>
          <td>
            <?php if ($user->active): ?>
              <a href="<?= site_url('auth/deactivate/') ?><?= $user->id ?> " title=""><span class="badge bg-success">Active</span></a>
            <?php else: ?>
              <a href="<?= site_url('auth/activate/') ?><?= $user->id ?>" title=""><span class="badge bg-danger">Inactive</span></a>
            <?php endif ?>

          
          </td>
          
          
        </tr>
      <?php endforeach ?>
           
    </tbody>
  </table>
</div>
    
<?php $this->load->view('templates/footer'); ?>

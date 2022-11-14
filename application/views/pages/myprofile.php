<?php $this->load->view('templates/header'); ?>
  <?php $this->load->view('pages/navbar'); ?>
  <style type="text/css">
    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 100px;
    }

    .sidenav a {
      padding: 8px 10px 8px 50px;
      text-decoration: none;
      color: white;
      display: block;
    }

    .sidenav a:hover {
      color: blue;
      background-color: red;
    }


    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      padding-left: 15px;
      padding-top: 100px;
    }
    
    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
<<<<<<< HEAD
    .tab button, .tab a {
      background-color: #caf595;
=======
    .tab button {
      background-color: inherit;
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
<<<<<<< HEAD
      color: green;
    }

    /* Change background color of buttons on hover */
    .tab a:hover {
      background-color: #007d21;
      color: white;
    }


    /* Create an active/current tablink class */
    .tab a.active {
      background-color: #64b500;
      color: #ffff;
=======
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
      color: white;
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border-top: none;
    }
    /*BUTTON SUBMIT*/
<<<<<<< HEAD
    .btnsubmit {
=======
    .btn {
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
      background: #3498db;
      background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
      background-image: -moz-linear-gradient(top, #3498db, #2980b9);
      background-image: -ms-linear-gradient(top, #3498db, #2980b9);
      background-image: -o-linear-gradient(top, #3498db, #2980b9);
      background-image: linear-gradient(to bottom, #3498db, #2980b9);
      -webkit-border-radius: 37;
      -moz-border-radius: 37;
      border-radius: 37px;
      -webkit-box-shadow: 3px 4px 13px #666666;
      -moz-box-shadow: 3px 4px 13px #666666;
      box-shadow: 3px 4px 13px #666666;
      color: #ffffff;
      padding: 7px 12px 7px 12px;
      border: solid #1f628d 2px;
      text-decoration: none;
    }

<<<<<<< HEAD
    .btnsubmit:hover {
=======
    .btn:hover {
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
      background: #3cb0fd;
      background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
      background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
      background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
      background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
      background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
      text-decoration: none;
    }
    /*BUTTON SUBMIT*/
    

    label {
      font-size: 13px;
    }
    input,label {
      display: inline-block;
      width: 100%;
    }
    
  </style>
  
<<<<<<< HEAD
<!--   <div class="tab sidenav bg-success d-flex flex-column">
    <button class="tablinks form-control" onclick="opentabs(event, 'personal_inf')">Personal Information</button>
    <button class="tablinks form-control" onclick="opentabs(event, 'family_bg')">Family Background</button>
    <button class="tablinks form-control" onclick="opentabs(event, 'overview')">Overview</button>
    <button class="tablinks form-control" onclick="opentabs(event, 'account')" id="defaultOpen">Account</button>
  </div> -->
  <div class="d-flex flex-column flex-shrink-0 p-3 tab sidenav bg-success mt-5">
    <hr>
    <a href="<?php echo site_url('members') ?>" class="tablinks form-control mb-1">Home</a>
    <a class="tablinks form-control mb-1" onclick="opentabs(event, 'personal_inf')" id="defaultOpen">Personal Information</a>
    <a class="tablinks form-control mb-1" onclick="opentabs(event, 'family_bg')">Family Background</a>
    <a class="tablinks form-control mb-1" onclick="opentabs(event, 'overview')">Overview</a>
    <a class="tablinks form-control mb-1" onclick="opentabs(event, 'account')">Change Password</a>
   
  </div>

  <div class="main">
    <!-- ACCOUNT -->
    <div id="account" class="tabcontent mb-5">
      <div class="card p-3">
        <?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>
        
      </div>
    </div>
    <!-- PERSONAL PROFILE -->
    <div id="personal_inf" class="tabcontent mb-5">
    
      <div class="card p-3">
        <h3>Personal Information</h3>
        <form action="<?php echo site_url('my_profile/update_personal_inf/') ?><?= $userinfos->id ?>" method="POST">
         
          <input type="text" name="user_id" value="<?php echo $userinfos->id ?>" hidden>
          <div class="row">
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="name" id="name" placeholder=" " value="<?= $userinfos->name ?>">
                <label for="name">Surname</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="firstname" placeholder=" " id="firstname" value="<?= $userinfos->firstname ?>">
                <label for="firstname">Firstname</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="middlename" id="middlename" value="<?= $userinfos->middlename ?>">
                <label for="middlename">Middlename</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="suffix" id="suffix" placeholder=" " value="<?= $userinfos->suffix ?>">
                <label for="suffix">Suffix</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <div class="form-floating mb-2">
                <input type="date" class="form-control" name="birthday" id="birthday" value="<?= $userinfos->birthday ?>">
                <label for="birthday">Date of Birth (dd/mm/yyyy)</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="birthplace" id="birthplace" value="<?= $userinfos->birthplace ?>" placeholder=" ">
                <label for="birthplace">Place of Birth</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-3">
              <div class="form-floating mb-2">
                <select class="form-select" aria-label="select gender" name="gender">
                  <option selected><?= $userinfos->gender ?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <label for="gender">Sex</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <select class="form-select" aria-label="select civil stat" name="civilstat">
                  <option selected><?= $userinfos->civilstat ?></option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Separated">Separated</option>
                </select>
                <label for="civilstat">Civil Status</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="height" id="height" value="<?= $userinfos->height ?>" placeholder=" ">
                <label for="height">Height (m)</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="weight" id="weight" value="<?= $userinfos->weight ?>" placeholder=" ">
                <label for="weight">Weight (kg)</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="bloodtype" id="bloodtype" value="<?= $userinfos->bloodtype ?>" placeholder=" ">
                <label for="bloodtype">Blood Type</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="gsis" id="gsis" value="<?= $userinfos->gsis ?>" placeholder=" ">
                <label for="gsis">GSIS ID No.</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="pagibig" id="pagibig" value="<?= $userinfos->pagibig ?>" placeholder=" ">
                <label for="pagibig">PAG-IBIG ID NO.</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="philhealth" id="philhealth" value="<?= $userinfos->philhealth ?>" placeholder=" ">
                <label for="philhealth">PHILHEALTH NO.</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="sss" id="sss" value="<?= $userinfos->sss ?>" placeholder=" ">
                <label for="sss">SSS No.</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="tin" id="tin" value="<?= $userinfos->tin ?>" placeholder=" ">
                <label for="tin">TIN No.</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="agencyemployee" id="agencyemployee" value="<?= $userinfos->agencyemployee ?>" placeholder=" ">
                <label for="agencyemployee">AGENCY EMPLOYEE NO.</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" name="citizenship" id="citizenship" value="<?= $userinfos->citizenship ?>" placeholder=" ">
                <label for="citizenship">CITIZENSHIP</label>
              </div>
            </div>
          </div>
          <div class="card p-2 mt-4">
            <h5>Residential Address</h5>
            <div class="row">
              <div class="col-3">
                <div class="form-floating">
                  <select name="region" class="form-control form-control-md" id="region">
                    <option selected><?= $userinfos->region ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text"  value="<?= $userinfos->region ?>" required placeholder=" ">
                  <label for="region">REGION</label>
                </div>
              </div>
              <div class="col-3">
                <div class="form-floating">
                  <select name="province" class="form-control form-control-md" id="province">
                    <option selected><?= $userinfos->province ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text"  value="<?= $userinfos->province ?>" required placeholder=" ">
                  <label for="province">PROVINCE</label>
                </div>
              </div>
              <div class="col-3">
                <div class="form-floating">
                  <select name="city" class="form-control form-control-md" id="city">
                    <option selected><?= $userinfos->city ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text"  value="<?= $userinfos->city ?>" required placeholder=" ">
                  <label for="city">CITY/MUNICIPALITY</label>
                </div>
              </div>
              <div class="col-3">
                <div class="form-floating">
                  <select name="barangay" class="form-control form-control-md" id="barangay">
                    <option selected><?= $userinfos->barangay ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" value="<?= $userinfos->barangay ?>" required placeholder=" ">
                  <label for="barangay">BARANGAY</label>
                </div>
              </div>
            </div>
            <div class="form-floating mt-3">
              <input type="text" class="form-control" name="street" id="street" value="<?= $userinfos->street ?>" placeholder=" ">
              <label for="street">Street</label>
            </div>
          </div>   
          <div class="inline mt-3">
            <button type="submit" class="btnsubmit btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
    <!-- FAMILY BACKGROUND -->
    <div id="family_bg" class="tabcontent mb-5">
      <div class="card p-3">
        <h3>Family Background</h3>
        <div class="card p-2 my-2">
          <h5>SPOUSE'S NAME</h5>
          <div class="row mt-2">
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spousesurname" id="spousesurname" value="<?= $userinfos->spousesurname ?>" placeholder=" ">
                <label for="spousesurname">SURNAME</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spousefirstname" id="spousefirstname" value="<?= $userinfos->spousefirstname ?>" placeholder=" ">
                <label for="spousefirstname">FIRSTNAME</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spousemiddlename" id="spousemiddlename" value="<?= $userinfos->spousemiddlename ?>" placeholder=" ">
                <label for="spousemiddlename">MIDDLE NAME</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spousesuffix" id="spousesuffix" value="<?= $userinfos->spousesuffix ?>" placeholder=" ">
                <label for="spousesuffix">SUFFIX</label>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spouseoccupation" id="spouseoccupation" value="<?= $userinfos->spouseoccupation ?>" placeholder=" ">
                <label for="spouseoccupation">OCCUPATION</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spouseemployer" id="spouseemployer" value="<?= $userinfos->spouseemployer ?>" placeholder=" ">
                <label for="spouseemployer">EMPLOYER/BUSINESS NAME</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spousebusinessaddress" id="spousebusinessaddress" value="<?= $userinfos->spousebusinessaddress ?>" placeholder=" ">
                <label for="spousebusinessaddress">BUSINESS ADDRESS</label>
              </div>
            </div>

            <div class="col-3 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="spousetelenum" id="spousetelenum" value="<?= $userinfos->spousetelenum ?>" placeholder=" ">
                <label for="spousetelenum">TELEPHONE NUMBER</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card p-2 my-2">
          <h5>ADD CHILDREN</h5>
          <div class="row mb-4">
            <div class="col">
              <div class="field_wrapper">
                <div class="input-group px-3 my-2">
                  <label for="fathersurname">NAME</label>
                  <input type="text" class="form-control" name="children[]" id="children" value="">
                  <button type="button" class="btn btn-outline-success add_button"><img src="<?php echo site_url('assets/images/plus-circle.svg') ?>" alt="add children button" title="Add Children"></button>
=======
  <div class="tab sidenav bg-success">
    <button class="tablinks form-control" onclick="opentabs(event, 'account')" id="defaultOpen">Account</button>
    <button class="tablinks form-control" onclick="opentabs(event, 'personal_inf')">Personal Information</button>
    <button class="tablinks form-control" onclick="opentabs(event, 'family_bg')">Family Background</button>
  </div>

  <div class="main">  
    <div id="account" class="tabcontent">
      <div class="card p-3">
        <form action="<?php echo site_url('my_profile/updateaccount') ?>/<?= $userinfos->id ?>" method="POST">
          <h3>Account</h3>

          <input type="text" name="user_id" value="<?php echo $userinfos->id ?>" hidden >
          <div class="row px-3 py-2">
            <div class="col">
              <div class="field">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $userinfos->firstname ?><?= $userinfos->middlename ?><?= $userinfos->name ?>">
              </div>
            </div>
            <div class="col">
              <div class="field">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $userinfos->email ?>">
              </div>
            </div>
          </div>
          <div class="row px-3 py-2">
            <div class="col">
              <div class="field">
                <label for="middlename">Password</label>
                <input type="text" class="form-control" name="middlename" id="middlename" value="<?= $userinfos->middlename ?>">
              </div>
            </div>
            <div class="col">
              <div class="field">
                <label for="suffix">Confirm Password</label>
                <input type="text" class="form-control" name="suffix" id="suffix" value="<?= $userinfos->suffix ?>">
              </div>
            </div>
          </div>
          <div class="inline mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
        
      </div>

    </div>

    <div id="personal_inf" class="tabcontent">
      
      <div class="card p-3">
        <h3>Personal Information</h3>
        <div class="row">
          <div class="col-3">
            <div class="field">
              <label for="name">Surname</label>
              <input type="text" class="form-control" name="name" id="name" value="<?= $userinfos->name ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="firstname">Firstname</label>
              <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $userinfos->firstname ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="middlename">Middlename</label>
              <input type="text" class="form-control" name="middlename" id="middlename" value="<?= $userinfos->middlename ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="suffix">Suffix</label>
              <input type="text" class="form-control" name="suffix" id="suffix" value="<?= $userinfos->suffix ?>">
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col">
            <div class="field">
              <label for="birthday">Date of Birth (dd/mm/yyyy)</label>
              <input type="date" class="form-control" name="birthday" id="birthday" value="<?= $userinfos->birthday ?>">
            </div>
          </div>
          <div class="col">
            <div class="field">
              <label for="birthplace">Place of Birth</label>
              <input type="text" class="form-control" name="birthplace" id="birthplace" value="<?= $userinfos->birthplace ?>">
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-3">
            <div class="field">
              <label for="gender">Sex</label>
              <select class="form-select" aria-label="select gender">
                <option selected><?= $userinfos->gender ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="civilstat">Civil Status</label>
              <select class="form-select" aria-label="select civil stat">
                <option selected><?= $userinfos->civilstat ?></option>
                <option value="Male">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="height">Height (m)</label>
              <input type="text" class="form-control" name="height" id="height" value="<?= $userinfos->height ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="weight">Weight (kg)</label>
              <input type="text" class="form-control" name="weight" id="weight" value="<?= $userinfos->weight ?>">
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-3">
            <div class="field">
              <label for="bloodtype">Blood Type</label>
              <input type="text" class="form-control" name="bloodtype" id="bloodtype" value="<?= $userinfos->bloodtype ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="gsis">GSIS ID No.</label>
              <input type="text" class="form-control" name="gsis" id="gsis" value="<?= $userinfos->gsis ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="pagibig">PAG-IBIG ID NO.</label>
              <input type="text" class="form-control" name="pagibig" id="pagibig" value="<?= $userinfos->pagibig ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="philhealth">PHILHEALTH NO.</label>
              <input type="text" class="form-control" name="philhealth" id="philhealth" value="<?= $userinfos->philhealth ?>">
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-3">
            <div class="field">
              <label for="sss">SSS No.</label>
              <input type="text" class="form-control" name="sss" id="sss" value="<?= $userinfos->sss ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="tin">TIN No.</label>
              <input type="text" class="form-control" name="tin" id="tin" value="<?= $userinfos->tin ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="agencyemployee">AGENCY EMPLOYEE NO.</label>
              <input type="text" class="form-control" name="agencyemployee" id="agencyemployee" value="<?= $userinfos->agencyemployee ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="field">
              <label for="citizenship">CITIZENSHIP</label>
              <input type="text" class="form-control" name="citizenship" id="citizenship" value="<?= $userinfos->citizenship ?>">
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-6">
            <div class="row">
              <div class="col">
                <div class="field">
                  <label for="sss">SSS No.</label>
                  <input type="text" class="form-control" name="sss" id="sss" value="<?= $userinfos->sss ?>">
                </div>
              </div>
              <div class="col">
                <div class="field">
                  <label for="sss">SSS No.</label>
                  <input type="text" class="form-control" name="sss" id="sss" value="<?= $userinfos->sss ?>">
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
                </div>
              </div>
            </div>
          </div>
<<<<<<< HEAD
          <h5>NAME OF CHILDREN</h5>
        </div>
        <div class="card p-2 my-2">
          <h5>FATHER'S NAME</h5>
          <div class="row">
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="fathersurname" id="fathersurname" value="<?= $userinfos->fathersurname ?>" placeholder=" ">
                <label for="fathersurname">SURNAME</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="fatherfirstname" id="fatherfirstname" value="<?= $userinfos->fatherfirstname ?>" placeholder=" ">
                <label for="fatherfirstname">FIRSTNAME</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="fathermiddlename" id="fathermiddlename" value="<?= $userinfos->fathermiddlename ?>" placeholder=" ">
                <label for="fathermiddlename">MIDDLE NAME</label>
              </div>
            </div>
            <div class="col-3">
              <div class="form-floating">
                <input type="text" class="form-control" name="fathersuffix" id="fathersuffix" value="<?= $userinfos->fathersuffix ?>" placeholder=" ">
                <label for="fathersuffix">SUFFIX</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card p-2 my-2">
          <h5>MOTHER'S MAIDEN NAME</h5>
          <div class="row">
            <div class="col-4">
              <div class="form-floating">
                <input type="text" class="form-control" name="mothersurname" id="mothersurname" value="<?= $userinfos->mothersurname ?>" placeholder=" ">
                <label for="mothersurname">SURNAME</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <input type="text" class="form-control" name="motherfirstname" id="motherfirstname" value="<?= $userinfos->motherfirstname ?>" placeholder=" ">
                <label for="motherfirstname">FIRSTNAME</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <input type="text" class="form-control" name="mothermiddlename" id="mothermiddlename" value="<?= $userinfos->mothermiddlename ?>" placeholder=" ">
                <label for="mothermiddlename">MIDDLE NAME</label>
=======
          <div class="col-6">
            <div class="row">
              <div class="col">
                <div class="field">
                  <label for="sss">SSS No.</label>
                  <input type="text" class="form-control" name="sss" id="sss" value="<?= $userinfos->sss ?>">
                </div>
              </div>
              <div class="col">
                <div class="field">
                  <label for="sss">SSS No.</label>
                  <input type="text" class="form-control" name="sss" id="sss" value="<?= $userinfos->sss ?>">
                </div>
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
              </div>
            </div>
          </div>
        </div>
        <div class="inline mt-3">
<<<<<<< HEAD
          <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      </div>
    </div>
    <!-- OVERVIEW -->
    <div id="overview" class="tabcontent mb-5">
      <div class="card p-3">
        <form action="<?= site_url('my_profile/update_overview') ?>/<?= $userinfos->id ?>" method="POST" accept-charset="utf-8">
          <h4>A BRIEF OVERVIEW ABOUT MYSELF</h3>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="overview_text" name="overview_text" style="height: 350px"><?php echo $userinfos->overview ?></textarea>
            <label for="floatingTextarea2">Overview</label>
          </div>
          <button type="submit" class="btn btn-outline-success form-control">Update</button>
        </form>
      </div>
    </div>
  </div>  
  <script src="assets/js/address_selector.js" type="text/javascript" charset="utf-8" async defer></script>

=======
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
    <div id="family_bg" class="tabcontent">
      <h3>Family Background</h3>
      <p>Family Background Page</p>
    </div>
  </div>  
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
  <script>
    function opentabs(evt, tab) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tab).style.display = "block";
      evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
<<<<<<< HEAD
  <script type="text/javascript">
    $('document').ready(function(){
      var maxField = 5;
      var addButton = $('.add_button');
      var wrapper = $('.field_wrapper');
      var fieldHTML = '<div class="input-group px-3 my-2"><input type="text" class="form-control " name="children[]" id="children" value=""><button type="button" class="btn btn-outline-danger remove_button"><img src="<?php echo site_url('assets/images/dash-circle.svg') ?>"></button></div>';
      var x = 1;

      $(addButton).click(function(){
        if(x < maxField){
          x++;
          $(wrapper).append(fieldHTML);
        }
      });
      $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
      });

      
    });
  </script>

<!--   <script type="text/javascript">
    $('document').ready(function(){
      
      $('#email').change(function(){
        var email = $('#email').val();
        if (email != '') {
          $.ajax({
            url:"<?= base_url() ?>/my_profile/check_email_availability",
            method:"POST",
            data:{email:email},
            success:function(data){
              $("#email_result").html(data); 
              document.getElementById("acc_submit").disabled = false;
            }
          });
        } else{
          alert('Opps! You forgot to fill your email address.');
        }

      });
    });
  </script> -->


<?php $this->load->view('templates/footer'); ?>
=======



<?php $this->load->view('templates/footer'); ?>
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6

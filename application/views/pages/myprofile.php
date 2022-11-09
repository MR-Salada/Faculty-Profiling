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
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
      color: white;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border-top: none;
    }
    /*BUTTON SUBMIT*/
    .btn {
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

    .btn:hover {
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
                </div>
              </div>
            </div>
          </div>
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
              </div>
            </div>
          </div>
        </div>
        <div class="inline mt-3">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
    <div id="family_bg" class="tabcontent">
      <h3>Family Background</h3>
      <p>Family Background Page</p>
    </div>
  </div>  
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



<?php $this->load->view('templates/footer'); ?>

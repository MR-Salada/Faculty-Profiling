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
    .btnsubmit {
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

    .btnsubmit:hover {
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
            <button type="submit" class="btnsubmit btn-primary">Update</button>
          </div>
        </form>
        
      </div>

    </div>

    <div id="personal_inf" class="tabcontent">
      
      <div class="card p-3">
        <h3>Personal Information</h3>
        <form action="<?php echo site_url('my_profile/update_personal_inf/') ?><?= $userinfos->id ?>" method="POST">
        
          <input type="text" name="user_id" value="<?php echo $userinfos->id ?>" hidden>
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
                <select class="form-select" aria-label="select gender" name="gender">
                  <option selected><?= $userinfos->gender ?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="civilstat">Civil Status</label>
                <select class="form-select" aria-label="select civil stat" name="civilstat">
                  <option selected><?= $userinfos->civilstat ?></option>
                  <option value="Single">Single</option>
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
          <div class="card p-2 mt-4">
            <h5>Residential Address</h5>
            <div class="row">
              <div class="col-3">
                <div class="field">
                  <label for="region">REGION</label>
                  <select name="region" class="form-control form-control-md" id="region">
                    <option selected><?= $userinfos->region ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
                </div>
              </div>
              <div class="col-3">
                <div class="field">
                  <label for="province">PROVINCE</label>
                  <select name="province" class="form-control form-control-md" id="province">
                    <option selected><?= $userinfos->province ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
                </div>
              </div>
              <div class="col-3">
                <div class="field">
                  <label for="city">CITY/MUNICIPALITY</label>
                  <select name="city" class="form-control form-control-md" id="city">
                    <option selected><?= $userinfos->city ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
                </div>
              </div>
              <div class="col-3">
                <div class="field">
                  <label for="barangay">BARANGAY</label>
                  <select name="barangay" class="form-control form-control-md" id="barangay">
                    <option selected><?= $userinfos->barangay ?></option>
                  </select>
                  <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" value="<?= $userinfos->barangay ?>" required>
                </div>
              </div>
            </div>
            <div class="field mt-3">
              <label for="street">Street</label>
              <input type="text" class="form-control" name="street" id="street" value="<?= $userinfos->street ?>">
            </div>
          </div>   
          <div class="inline mt-3">
            <button type="submit" class="btnsubmit btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
    <div id="family_bg" class="tabcontent">
      <div class="card p-3">
        <h3>Family Background</h3>
        <div class="card p-2 my-2">
          <h5>SPOUSE'S NAME</h5>
          <div class="row mt-2">
            <div class="col-3">
              <div class="field">
                <label for="spousesurname">SURNAME</label>
                <input type="text" class="form-control" name="spousesurname" id="spousesurname" value="<?= $userinfos->spousesurname ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="spousefirstname">FIRSTNAME</label>
                <input type="text" class="form-control" name="spousefirstname" id="spousefirstname" value="<?= $userinfos->spousefirstname ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="spousemiddlename">MIDDLE NAME</label>
                <input type="text" class="form-control" name="spousemiddlename" id="spousemiddlename" value="<?= $userinfos->spousemiddlename ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="spousesuffix">SUFFIX</label>
                <input type="text" class="form-control" name="spousesuffix" id="spousesuffix" value="<?= $userinfos->spousesuffix ?>">
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-3">
              <div class="field">
                <label for="spouseoccupation">OCCUPATION</label>
                <input type="text" class="form-control" name="spouseoccupation" id="spouseoccupation" value="<?= $userinfos->spouseoccupation ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="spouseemployer">EMPLOYER/BUSINESS NAME</label>
                <input type="text" class="form-control" name="spouseemployer" id="spouseemployer" value="<?= $userinfos->spouseemployer ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="spousebusinessaddress">BUSINESS ADDRESS</label>
                <input type="text" class="form-control" name="spousebusinessaddress" id="spousebusinessaddress" value="<?= $userinfos->spousebusinessaddress ?>">
              </div>
            </div>

            <div class="col-3 mb-3">
              <div class="field">
                <label for="spousetelenum">TELEPHONE NUMBER</label>
                <input type="text" class="form-control" name="spousetelenum" id="spousetelenum" value="<?= $userinfos->spousetelenum ?>">
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
                </div>
              </div>
            </div>
          </div>
          <h5>NAME OF CHILDREN</h5>
        </div>
        <div class="card p-2 my-2">
          <h5>FATHER'S NAME</h5>
          <div class="row">
            <div class="col-3">
              <div class="field">
                <label for="fathersurname">SURNAME</label>
                <input type="text" class="form-control" name="fathersurname" id="fathersurname" value="<?= $userinfos->fathersurname ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="fatherfirstname">FIRSTNAME</label>
                <input type="text" class="form-control" name="fatherfirstname" id="fatherfirstname" value="<?= $userinfos->fatherfirstname ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="fathermiddlename">MIDDLE NAME</label>
                <input type="text" class="form-control" name="fathermiddlename" id="fathermiddlename" value="<?= $userinfos->fathermiddlename ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="field">
                <label for="fathersuffix">SUFFIX</label>
                <input type="text" class="form-control" name="fathersuffix" id="fathersuffix" value="<?= $userinfos->fathersuffix ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="card p-2 my-2">
          <h5>MOTHER'S MAIDEN NAME</h5>
          <div class="row">
            <div class="col-4">
              <div class="field">
                <label for="mothersurname">SURNAME</label>
                <input type="text" class="form-control" name="mothersurname" id="mothersurname" value="<?= $userinfos->mothersurname ?>">
              </div>
            </div>
            <div class="col-4">
              <div class="field">
                <label for="motherfirstname">FIRSTNAME</label>
                <input type="text" class="form-control" name="motherfirstname" id="motherfirstname" value="<?= $userinfos->motherfirstname ?>">
              </div>
            </div>
            <div class="col-4">
              <div class="field">
                <label for="mothermiddlename">MIDDLE NAME</label>
                <input type="text" class="form-control" name="mothermiddlename" id="mothermiddlename" value="<?= $userinfos->mothermiddlename ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="inline mt-3">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      
    </div>
  </div>  
  <script src="assets/js/address_selector.js" type="text/javascript" charset="utf-8" async defer></script>

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
      })
    });
  </script>



<?php $this->load->view('templates/footer'); ?>

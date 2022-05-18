<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="<?= site_url('assets/css/bootstrap.min.css') ?>">
  <style type="text/css">
    
  </style>
</head>

<body>
  <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: #00470c;
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(120, 44%, 40%) 15%,
          hsl(118, 41%, 30%) 35%,
          hsl(117, 42%, 20%) 75%,
          hsl(121, 40%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(126, 42%, 46%) 15%,
          hsl(120, 41%, 30%) 35%,
          hsl(122, 41%, 20%) 75%,
          hsl(118, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#006b07, #1aba4f);
      overflow: hidden;

    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#006b07, #1aba4f);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <img src="<?= site_url('assets/images/logo.png') ?>" width="190" alt="logo">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            NEMSU-TC <br />
            <span style="color: hsl(218, 81%, 75%)">Integrated Campus Management System (ICMS)</span>
          </h1>
          
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <h5 class="mx-3 mt-3">Please login to your account</h5>

            <div class="card-body px-4 py-5 px-md-5">

              <form action="<?php echo site_url('auth/login') ?>" method="POST">
                <div id="infoMessage" class="text-danger"><?php echo $message;?></div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="identity" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

               

                <!-- Submit button -->
                <button type="submit" class="btn btn-success btn-block mb-4">
                  Login
                </button>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</body>
</html>
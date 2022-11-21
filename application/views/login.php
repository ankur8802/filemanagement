<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>MGU-FERP | Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link href="<?= base_url()?>assets/css/vendor.min.css" rel="stylesheet">
      <link href="<?= base_url()?>assets/css/app.min.css" rel="stylesheet">
      <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
   </head>
   <body class='pace-top'>
      <div id="app" class="app app-full-height app-without-header">
         <div class="login">
            <div class="login-content">
               <form action="<?= base_url('check-login')?>" method="POST" name="login_form">
                  <h1 class="text-center">Sign In</h1>
                  <div class="text-white text-opacity-50 text-center mb-4">
                     For your protection, please verify your identity.
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Email Address <span class="text-danger">*</span></label>
                     <input type="email" name="userac" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Enter Email" required>
                  </div>
                  <div class="mb-3">
                     <div class="d-flex">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                     </div>
                     <input type="password" name="pass" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Enter Password" required>
                  </div>

                  <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>

               </form>
            </div>
         </div>
      </div>
      <?= include('common/footer.php')?>
   </body>
</html>
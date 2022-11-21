<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>MGU-FERP | Add User </title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link href="<?= base_url()?>assets/css/vendor.min.css" rel="stylesheet" />
      <link href="<?= base_url()?>assets/css/app.min.css" rel="stylesheet" />
      <link href="<?= base_url()?>assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
       <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .select2-results__options
    {
        color:#000;
    }
    .select2-selection__choice__display
    {
      color:#000;   
    }
    .select2-container--default .select2-selection--multiple
    {
        background:transparent;
        padding:15px;
    }
</style>
   </head>
   <body>
      <div id="app" class="app">

        <!---top header start-->
        <?php include('common/header.php')?>
         <!---top header End-->
         <!--SideBar Start -->
       <?php include('common/sidebar.php')?>
          <!--SideBar End -->
         <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
         <div id="content" class="app-content">
            <div class="row">
 
                <div class="col-md-12">
                                             
                         
                           <div id="validation" class="mb-5">
                             
                              <div class="card">
                                 <div class="card-body">
                                    <form class="was-validated" action="<?= base_url('add-user-by-super-admin')?>" method="post">
                                       <div class="row mb-n3">

                                           <div class="col-md-12">  
                                               <h2 class="text-uppercase text-info p-2 text-center bg-dark">  + Add User </h2>
                                           </div>

                                           <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label text-white text-uppercase" for="uname"> Name </label>
                                                    <input type="text" name="name" class="form-control" id="uname" required>
                                                </div>
                                           </div>

                                           <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label text-white text-uppercase" for="uemail"> email </label>
                                                    <input type="email" name="email" class="form-control" id="uemail" required>
                                                </div>
                                           </div>

                                           <div class="col-md-12">
                                                <div class="mb-3">
                                                    <div class="small text-white text-opacity-50 mb-2"><b> Account Type </b></div>
                                                    <select name="type" class="form-select text-uppercase" required>
                                                    <option value="">Select Account Type</option>
                                                    <option value="sadmin">Super Admin</option>
                                                    <option value="admin"> Admin</option>
                                                    </select>
                                                </div>
                                           </div>

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label text-white text-uppercase" for="upassword"> password </label>
                                                    <input type="password" name="password" class="form-control" id="upassword" required>
                                                </div>
                                           </div>
                                        


                                           <div class="col-md-12 mb-2 text-center">
                                                <button class="text-uppercase btn btn-info ps-5 pe-5">Add User </button>
                                           </div>


                                               

                                       </div>
                                    </form>

                                 </div>
                                 <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>

            </div>
         </div>

      
      </div>
     
     <?php include('common/footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

   </body>
</html>
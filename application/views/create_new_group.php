<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>MGU-FERP | CREATE NEW GROUP </title>
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
                                    <form class="was-validated" action="<?= base_url('create-group')?>" method="post" enctype="multipart/form-data">
                                       <div class="row mb-n3">

                                           <div class="col-md-12">  
                                               <h2 class="text-uppercase text-info p-2 text-center bg-dark">  + Create new GRoup </h2>
                                           </div>

                                           <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label text-white" for="fname"> Group Name </label>
                                                    <input type="text" name="gname" class="form-control" id="fname" required>
                                                </div>
                                           </div>
                                           

                                           <!-- <div class="col-md-12">
                                                <div class="mb-3">
                                                    <div class="small text-white text-opacity-50 mb-2"><b>File Include From My Files </b></div>
                                                    <select name="gfileid" class="form-select" required>
                                                    <option value="">Select File</option>
                                                    <?php
                                                         foreach($myfiles as $myfiles)
                                                         {
                                                    ?>
                                                    <option value="<?= $myfiles->id?>"> <?= $myfiles->fname?> - (<?= $myfiles->date?>) </option>
                                                    <?php }?>
                                                    </select>
                                                </div>
                                           </div> -->


                                           <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label text-white" for="gremark"> Group Remark </label>
                                                    <textarea rows="5" id="gremark" name="gremark" class="form-control"></textarea>
                                                </div>
                                           </div>

                                           <div class="col-md-12">

                                               <div class="form-group mb-3">
                                                <label class="form-label" for="exampleFormControlSelect2"> Add User in Group </label>
                                                 <select class="js-example-basic-multiple form-select" name="groupmember[]" multiple="multiple">
                                                       <?php
                                                         foreach($allusers as $allusers)
                                                         {
                                                       ?>
                                                       <option><?= $allusers->email?></option>
                                                       <?php }?>

                                                 </select>
                                                </div>

                                           </div>

                                           <div class="col-md-12 mb-2 text-center">
                                                <button class="text-uppercase btn btn-info ps-5 pe-5">Create group </button>
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
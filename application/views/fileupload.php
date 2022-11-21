<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>MGU-FERP | Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link href="<?= base_url()?>assets/css/vendor.min.css" rel="stylesheet" />
      <link href="<?= base_url()?>assets/css/app.min.css" rel="stylesheet" />
      <link href="<?= base_url()?>assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
       <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <div id="app" class="app">

        <!---top header start-->
        <?php include('common/header.php')?>
         <!---top header End-->
         <!--SideBar Start -->
       <?php include('common/sidebar.php')?>
          <!--SideBar End -->

            <div id="content" class="app-content">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                                             
                         
                           <div id="validation" class="mb-5">
                             
                              <div class="card">
                                 <div class="card-body">
                                    <form class="was-validated" action="<?= base_url('add-files')?>" method="post" enctype="multipart/form-data">
                                       <div class="row mb-n3">

                                           <div class="col-md-12">  
                                               <h2 class="text-uppercase text-info p-2 text-center bg-dark">  + add new file </h2>
                                           </div>

                                           <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label text-white" for="fname"> File Name </label>
                                                    <input type="text" name="fname" class="form-control" id="fname" required>

                                                    <div class="alert alert-danger namealerterror mt-1" style="display:none;padding:5px;zoom:0.9">
                                                     Name Already in Use Enter Another Name
                                                    </div>

                                                </div>
                                           </div>

                                          
                                          <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label text-white" for="defaultFile"> Select File </label>
                                                    <input type="file" name="docfile" class="form-control" id="defaultFile" required>
                                                </div>
                                           </div>

                                           <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label text-white" for="remarktext"> File Remark </label>
                                                    <textarea rows="5" id="remarktext" name="fremark" class="form-control"></textarea>
                                                </div>
                                           </div>

                                           <div class="col-md-12 mb-2">
                                                <h5 class="bold text-dark text-center bg-warning p-1"> Add Tags  </h5>

                                               <div class="form-check form-switch form-check-inline mt-2">

                                                <div class="">
                                                    <input class="form-check-input" name="filemark[]" id="ImportantFile" value="Important File" type="checkbox">
                                                    <label for="ImportantFile" class="form-check-label text-white"> Important File </label>
                                                    
                                                </div>
                                               </div>

                                               <div class="form-check form-switch form-check-inline mt-2">

                                                <div class="">
                                                    <input class="form-check-input" name="filemark[]" id="PublicFile" value="Public File"  type="checkbox">
                                                    <label for="PublicFile"  class="form-check-label text-white"> Public File </label>
                                                    
                                                </div>
                                               </div>

                                                <div class="form-check form-switch form-check-inline mt-2">

                                                <div class="">
                                                    <input class="form-check-input" name="filemark[]" id="Urgentfile" value="Urgent File"  type="checkbox">
                                                    <label for="Urgentfile"  class="form-check-label text-white"> Urgent File</label>
                                                    
                                                </div>
                                               </div>

                                           </div>

                                           <div class="col-md-12 mb-2 text-center">
                                                <button class="text-uppercase btn btn-info ps-5 pe-5">Submit </button>
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
            </div>
         </div>
     <?php include('common/footer.php')?>
   

<script>
     $('#fname').keyup(function()
     {
         var fname=$(this).val();
         $.ajax({
             url:"<?= base_url('check-file-name')?>",
             type:"post",
             data:{fname:fname},
             success:function(output)
             {
                 if(output=='sorry')
                 {
                    $('.namealerterror').show();
                 }
                 else if(output=='ok')
                 {
                   $('.namealerterror').hide();
                 }
             }
         })
     })
</script>

   </body>
</html>
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
 <?php
  if(empty($findgroup))
  {
     echo "<h2 class='text-dark rounded text-center bg-info p-2'>No Group Avaliable Now</h2>";
  }

      foreach($findgroup as $findgroup)
      { 
 ?>
                <div class="col-md-4">
                   
                   <div class="card">

                        <div class="card-body">
                            <h5 class="card-title"> <?= $findgroup->gname;?> </h5>
                            <p class="card-text"><?= $findgroup->gremark;?></p>
<?php
   $gfileid=$findgroup->gfileid;
   $gfilefetch=$this->db->select()->from('files')->where('id',$gfileid)->get();
   $gfilefetcho=$gfilefetch->row('docfile');

?>

<?php
  $sessionuser=$this->session->userdata('mguloginuserdetails349');
  if($sessionuser->type=='sadmin')
  {
?>
    <a href="<?= base_url('closed-group-by-super-admin')?>/<?= $findgroup->id;?>" class="btn btn-outline-danger"> Closed Group </a>
    <a href="<?= base_url('manage-group')?>/<?= $findgroup->id;?>" class="btn btn-outline-warning mt-1"> Manage Group </a>
<?php }else{?>
                           <a href="<?= base_url('group-detail')?>/<?= $findgroup->id;?>" class="btn btn-outline-warning mt-1"> Group Detail </a>
<?php }?>
                        </div>

                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                   </div>
                                 
                </div>
<?php }?>
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
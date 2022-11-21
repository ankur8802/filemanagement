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

<?php include('common/datatablecss.php')?>

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
                     <h2 class="text-center text-uppercase bg-info p-2 rounded"> <?= $group_details->gname;?> </h2>
                     <p class="text-center border border-info p-2 rounded"><?= $group_details->gremark;?></p>
                 </div>
<?php
  $sessionuser=$this->session->userdata('mguloginuserdetails349');
  if($sessionuser->type=='sadmin' || $sessionuser->type=='admin')
  {
?>
                 <div class="col-md-12">
                     <h5>Group Files 
                          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalLg">Add More Files</button>
                     </h5>
<?php }else{?>
                      <div class="col-md-12">
                     <h5>Group Files 
                     </h5>
                     <?php }?>

                              <!-- default table -->
                              <table id="datatableDefault" class="table table-bordered text-center w-100">
                                <thead class="">
                                  <tr>
                                    <th class="text-center">File Name</th>
                                    <th class="text-center">File Remark</th>
                                    <th class="text-center">Upload By</th>
                                    <th class="text-center">Upload Time</th>
                                    <th class="text-center">Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                     <?php
                                       $grpid=$group_details->id;
                                       $grpiddls=$this->db->select()->from('group_more_files')->where('group_id',$grpid)->get();
                                       $grpiddlsfiles=$grpiddls->result();
                                       foreach($grpiddlsfiles as $grpiddlsfiles)
                                       {
                                          $grpiddlsfilesinnerfid=$grpiddlsfiles->file_id;
                                          $grpiddlsfilesinnerfidq=$this->db->select()->from('files')->where('id',$grpiddlsfilesinnerfid)->get();
                                          $grpiddlsfilesinnerfidf=$grpiddlsfilesinnerfidq->row();

                                          $checkurgent = $grpiddlsfilesinnerfidf->filemark;
                                          $checkurgentarray=explode(",",$checkurgent);
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url()?>uploads/mgufiles/<?= $grpiddlsfilesinnerfidf->docfile?>" download> <?= $grpiddlsfilesinnerfidf->fname?>
                                            <?php
                                                if(array_search("Urgent File",$checkurgentarray))
                                                {
                                                    echo '<i class="fas fa-lg fa-fw me-2 fa-flag text-danger"></i>';
                                                }
                                            ?>
                                            </a>
                                        </td>

                                        <td>
                                             <?= $grpiddlsfilesinnerfidf->fremark?>
                                        </td>

                                        <td>
                                             <?php
                                                $findusername=$grpiddlsfilesinnerfidf->user_id;
                                                $findusernameq=$this->db->select()->from('users')->where('id',$findusername)->get();
                                                $findusernameqf=$findusernameq->row('name');
                                                echo $findusernameqf;
                                              ?>
                                        </td>

                                        <td> 
                                           <?php
                                            date_default_timezone_set("Asia/kolkata");
                                            $impdate=$grpiddlsfilesinnerfidf->date;
                                            $time1 = new DateTime($impdate);
                                            $now = new DateTime();
                                            $interval = $time1->diff($now,true);
                                            if ($interval->y) echo $interval->y . ' years';
                                            elseif ($interval->m) echo $interval->m . ' months';
                                            elseif ($interval->d) echo $interval->d . ' days';
                                            elseif ($interval->h) echo $interval->h . ' hours';
                                            elseif ($interval->i) echo $interval->i . ' minutes';
                                            else echo "less than 1 minute";
                                           ?>
                                         </td>

                                          <td>
                                             <?= $grpiddlsfilesinnerfidf->date?>
                                          </td>

                                    </tr>
                                    
                                    <?php }?>
                                    
                                </tbody>
                              </table>
                 </div>


            </div>

<?php
   if($sessionuser->type=='sadmin')
  {
?>
          <div class="col-md-12">
                     <h5>Group User
                          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalLgusers">Add More User</button>
                     </h5>

           
            <table id="datatableDefault2" class="table table-bordered text-center w-100">
                                    <thead class="table-primary">
                                        <tr>
                                        <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                             $groupmember=$group_details->groupmember;
                                             $groupmemberarray=explode(",", $groupmember);
                                             $groupuserloop=count($groupmemberarray);
                                             for($lop=0;$lop<$groupuserloop;$lop++)
                                             {
                                        ?>
                                          <tr>
                                              <td><?= $groupmemberarray[$lop];?></td>
                                          </tr>
                                        <?php }?>
                                    </tbody>
                </table>

            
<?php }?>

         </div>

      
      </div>
</div>

<?php
   if($sessionuser->type=='sadmin' || $sessionuser->type=='admin')
  {
?>
<!-- modal-lg -->
<div class="modal fade" id="modalLg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
         <form class="row" method="post" action="<?= base_url('add-file-in-group')?>">
             <div class="col-md-12">
                <div class="mb-3 p-2">
                    <div class="small text-white text-opacity-50 mb-2"><b>File Include From My Files </b></div>
                    <input type="hidden" name="group_id" value="<?= $group_details->id?>">
                    <select name="file_id" class="form-select" required>
                    <option value="">Select File</option>
                    <?php
                            foreach($myfiles as $myfiles)
                            {
                    ?>
                    <option value="<?= $myfiles->id?>"> <?= $myfiles->fname?> - (<?= $myfiles->date?>) </option>
                    <?php }?>
                    </select>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="text-center mb-2">
                    <button class="text-uppercase btn btn-success">Submit</button>
                </div>
            </div>

         </form>
    </div>
  </div>
</div>
<!-- modal-lg -->
<div class="modal fade" id="modalLgusers">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
         <form class="row" method="post" action="<?= base_url('add-user-in-group')?>">
             <div class="col-md-12">
                <div class="mb-3 p-2">
                    <div class="small text-white text-opacity-50 mb-2"><b> Add User in Group </b></div>
                    <input type="hidden" name="group_id" value="<?= $group_details->id?>">
                    <select name="user" class="form-select" required>
                    <option value="">Select User</option>
                    <?php
                            foreach($allusers as $allusers)
                            {
                    ?>
                    <option><?= $allusers->email?></option>
                    <?php }?>
                    </select>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="text-center mb-2">
                    <button class="text-uppercase btn btn-success">Submit</button>
                </div>
            </div>

         </form>
    </div>
  </div>
</div>
<?php }?>

     <?php include('common/footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php include('common/datatablejs.php')?>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

<script>
  $('#datatableDefault').DataTable({
    lengthMenu: [ 10, 20, 30, 40, 50 ],
    responsive: true,
  });
</script>
<script>
  $('#datatableDefault2').DataTable({
    lengthMenu: [ 10, 20, 30, 40, 50 ],
    responsive: true,
  });
</script>

   </body>
</html>
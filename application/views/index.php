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
         <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
         <div id="content" class="app-content">
            <div class="row">

               <div class="col-xl-6">
                  <div class="card mb-3">
                     <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                           <span class="flex-grow-1 text-white text-uppercase">Top 10 Important Files  <small class="text-info">(Click on File name For Download)</small> </span>
                        </div>
                       
                        <div class="row">
                            

                            <div class="col-md-12">
                              <!-- default table -->
                              <table class="table table-bordered text-center">
                                <thead class="table-primary">
                                  <tr>
                                    <th scope="col">File Name</th>
                                    <th scope="col">Upload Time</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                     foreach($importantfiles as $importantfiles)
                                     {
                                  ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url()?>uploads/mgufiles/<?= $importantfiles->docfile?>" download> <?= $importantfiles->fname?></a>
                                        </td>
                                        <td> 
                                           <?php
                                            date_default_timezone_set("Asia/kolkata");
                                            $impdate=$importantfiles->date;
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
                                    </tr>
                                    
                                    <?php }?>
                                </tbody>
                              </table>
                            </div>
                           
                        </div>
                     </div>
                     <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                     </div>
                  </div>
               </div>

               <div class="col-xl-6">
                  <div class="card mb-3">
                     <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                           <span class="flex-grow-1 text-white text-uppercase"> Top 10 Latest Files <small class="text-info">(Click on File name For Download)</small></span>
                        </div>
                       
                        <div class="row">
                              <div class="col-md-12">
                                <!-- default table -->
                                <table class="table table-bordered text-center">
                                  <thead class="table-primary">
                                    <tr>
                                      <th scope="col">File Name</th>
                                      <th scope="col">Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                     foreach($latestfiles as $latestfiles)
                                     {
                                  ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url()?>uploads/mgufiles/<?= $latestfiles->docfile?>" download> <?= $latestfiles->fname?></a>
                                        </td>
                                        <td> 
                                           <?php
                                            date_default_timezone_set("Asia/kolkata");
                                            $impdate=$latestfiles->date;
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
                                    </tr>
                                    
                                    <?php }?>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                     </div>
                     <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                     </div>
                  </div>
               </div>

<?php
  $sessionuser=$this->session->userdata('mguloginuserdetails349');
  if($sessionuser->type=='sadmin')
  {
?>
                <div class="col-xl-12">
                  <div class="card mb-3">
                     <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                           <span class="flex-grow-1 text-white text-uppercase"> User LATEST top 10 FILES  <small class="text-info"> (Click on File name For Download) </small></span>
                        </div>
                       
                        <div class="row">
                              <div class="col-md-12">
                                <!-- default table -->
                                <table class="table table-bordered text-center">
                                  <thead class="table-primary">
                                    <tr>
                                      <th scope="col">File Name</th>
                                      <th scope="col">Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php
                                     foreach($userfiles as $userfiles)
                                     {
                                  ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url()?>uploads/mgufiles/<?= $userfiles->docfile?>" download> <?= $userfiles->fname?></a>
                                        </td>
                                        <td> 
                                           <?php
                                            date_default_timezone_set("Asia/kolkata");
                                            $impdate=$userfiles->date;
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
                                    </tr>
                                    
                                    <?php }?>

                                    
                                  </tbody>
                                </table>
                              </div>
                          </div>
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

                <div class="col-xl-12">
                  <div class="card mb-3">
                     <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                           <span class="flex-grow-1 text-white text-uppercase">LATEST Top 10  Public FILES  <small class="text-info"> (Click on File name For Download) </small></span>
                        </div>
                       
                        <div class="row">
                              <div class="col-md-12">
                                <!-- default table -->
                                <table class="table table-bordered text-center">
                                  <thead class="table-primary">
                                    <tr>
                                      <th scope="col">File Name</th>
                                      <th scope="col">Upload By</th>
                                      <th scope="col">Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php
                                     foreach($publicfiles as $publicfiles)
                                     {
                                  ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url()?>uploads/mgufiles/<?= $publicfiles->docfile?>" download> <?= $publicfiles->fname?></a>
                                        </td>
                                        <td>
                                            <?php
                                                 $user_id=$publicfiles->user_id;
                                                 $finduser=$this->db->select()->from('users')->where('id',$user_id)->get();
                                                 $finduserf=$finduser->row('email');
                                                 echo $finduserf;
                                            ?>
                                        </td>
                                        <td> 
                                           <?php
                                            date_default_timezone_set("Asia/kolkata");
                                            $impdate=$publicfiles->date;
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
                                    </tr>
                                    
                                    <?php }?>
                                  </tbody>
                                </table>
                              </div>
                          </div>
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
     
     <?php include('common/footer.php')?>
   
   </body>
</html>
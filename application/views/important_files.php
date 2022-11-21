<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>MGU-FERP | Important Files</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link href="<?= base_url()?>assets/css/vendor.min.css" rel="stylesheet" />
      <link href="<?= base_url()?>assets/css/app.min.css" rel="stylesheet" />
      <link href="<?= base_url()?>assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
       <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
       <?php include('common/datatablecss.php')?>

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

               <div class="col-xl-12">
                  <div class="card mb-3">
                     <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                           <span class="flex-grow-1 text-white text-uppercase"> Important Files  <small class="text-info">(Click on File name For Download)</small> </span>
                        </div>
                       
                        <div class="row">
                            

                            <div class="col-md-12">
                              <!-- default table -->
                              <table id="datatableDefault" class="table table-bordered text-center">
                                <thead class="table-primary">
                                  <tr>
                                    <th scope="col">File Name</th>
                                    <th scope="col">File Remark</th>
                                    <th scope="col">Upload Time</th>
                                    <th scope="col">Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                     foreach($importantfiles as $importantfiles)
                                     {
                                         $checkurgent = $importantfiles->filemark;
                                         $checkurgentarray=explode(",",$checkurgent);
                                  ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url()?>uploads/mgufiles/<?= $importantfiles->docfile?>" download> <?= $importantfiles->fname?>
                                            <?php
                                                if(array_search("Urgent File",$checkurgentarray))
                                                {
                                                    echo '<i class="fas fa-lg fa-fw me-2 fa-flag text-danger"></i>';
                                                }
                                            ?>
                                            </a>
                                        </td>

                                        <td>
                                             <?= $importantfiles->fremark?>
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

                                          <td>
                                             <?= $importantfiles->date?>
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
   <?php include('common/datatablejs.php')?>
<script>
  $('#datatableDefault').DataTable({
    lengthMenu: [ 10, 20, 30, 40, 50 ],
    responsive: true,
  });
</script>
   </body>
</html>
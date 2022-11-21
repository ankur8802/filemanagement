<div id="header" class="app-header">
<div class="desktop-toggler">
   <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
   <span class="bar"></span>
   <span class="bar"></span>
   <span class="bar"></span>
   </button>
</div>
<div class="mobile-toggler">
   <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
   <span class="bar"></span>
   <span class="bar"></span>
   <span class="bar"></span>
   </button>
</div>
<div class="brand">
   <a href="<?= base_url('dashboard')?>" class="brand-logo">
   <span class="brand-img">
   <span class="brand-img-text text-theme">M</span>
   </span>
   <span class="brand-text">MGU-FERP</span>
   </a>
</div>
<div class="menu">

<?php
   error_reporting(0);
     $sessionuser=$this->session->userdata('mguloginuserdetails349');
?>
  
   <div class="menu-item dropdown dropdown-mobile-full">
     
      <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">

         <div class="menu-img online">
            <img src="<?= base_url()?>uploads/profile/<?= $sessionuser->profileimg;?>" alt="Profile" height="60" />
         </div>
        
        <div class="menu-text d-sm-block d-none">
            <span class="">
                   <?php 
                       echo $sessionuser->email;
                   ?>
            </span>
        </div>

      </a>

      <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
       
          <!-- <a class="dropdown-item d-flex align-items-center" href="<?= base_url('profile')?>">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>  -->

          <a class="dropdown-item d-flex align-items-center text-uppercase" data-bs-toggle="modal" data-bs-target="#changepassword">
              Change Password 
          </a> 

         <div class="dropdown-divider"></div>


          <a class="dropdown-item d-flex align-items-center" href="<?= base_url('logout')?>">
              LOGOUT
              <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i>
          </a>
             
      </div>
   </div>
</div>

</div>

<div class="modal fade" id="changepassword">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
         <div class="container p-3">
             <h2 class="text-center">Change Password</h2>

             <form class="row" action="<?= base_url('change-password')?>" method="post">
                <div class="col-md-12">
                    <input type="password" class="form-control" placeholder="Enter New Password" name="password" required>
                </div>

                <div class="col-md-12 mt-2">
                    <input type="password" class="form-control" placeholder="Enter Confirm New Password" name="cpassword" required>
                </div>

                <div class="col-md-12 mt-2">
                    <input type="password" class="form-control" placeholder="Enter Current Password" name="opassword" required>
                </div>

                <div class="col-md-12 mt-2 text-center">
                    <button class="btn btn-info">Submit</button>
                </div>

            </form>

         </div>
    </div>
  </div>
</div>
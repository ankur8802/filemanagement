<?php
  $sessionuser=$this->session->userdata('mguloginuserdetails349');
?>
<div id="sidebar" class="app-sidebar">
<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
   <div class="menu">

      <div class="menu-header">Main</div>
      <div class="menu-item active">
         <a href="<?= base_url('dashboard')?>" class="menu-link">
         <span class="menu-icon"><i class="fas fa-lg fa-fw me-2 fa-home"></i></span>
         <span class="menu-text">Dashboard</span>
         </a>
      </div>

      <div class="menu-header">Files</div>

      <div class="menu-item has-sub">
         <a href="javascript:;" class="menu-link">
            <div class="menu-icon">
               <i class="far fa-lg fa-fw me-2 fa-file"></i>
               <span class="w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px"></span>
            </div>
            <div class="menu-text d-flex align-items-center"> My Files </div>
            <span class="menu-caret"><b class="caret"></b></span>
         </a>
         <div class="menu-submenu">

            <div class="menu-item">
               <a href="<?= base_url('upload-file')?>" class="menu-link text-uppercase alert alert-info m-1">
                  <div class="menu-text"> Upload File </div>
               </a>

               <a href="<?= base_url('important-files')?>" class="menu-link text-uppercase alert alert-info m-1">
                  <div class="menu-text"> IMPORTANT FILES </div>
               </a>

               <a href="<?= base_url('latest-files')?>" class="menu-link text-uppercase alert alert-info m-1">
                  <div class="menu-text"> LATEST FILES </div>
               </a>

               <a href="<?= base_url('public-files')?>" class="menu-link text-uppercase alert alert-info m-1">
                  <div class="menu-text"> PUBLIC FILES  </div>
               </a>
<?php
  if($sessionuser->type=='sadmin')
  {
?>
      <a href="<?= base_url('all-files')?>" class="menu-link text-uppercase alert alert-info m-1">
                  <div class="menu-text"> All Files  </div>
      </a>

<?php }?>
               <!-- <a href="<?= base_url('manage-files')?>" class="menu-link text-uppercase alert alert-info m-1">
                  <div class="menu-text"> Manage Files </div>
               </a> -->

            </div>

         </div>
      </div>

      <div class="menu-header"> Group </div>
      <div class="menu-item has-sub">
         <a href="javascript:;" class="menu-link">
            <div class="menu-icon">
               <i class="far fa-lg fa-fw me-2 fa-user-circle"></i>
               <span class="w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px"></span>
            </div>
            <div class="menu-text d-flex align-items-center"> Manage Group </div>
            <span class="menu-caret"><b class="caret"></b></span>
         </a>
         <div class="menu-submenu">

            <div class="menu-item">
<?php
  if($sessionuser->type=='sadmin')
  {
?>
               <a href="<?= base_url('create-new-group')?>" class="menu-link alert alert-info m-1">
                  <div class="menu-text"> Create New Group </div>
               </a>

               <a href="<?= base_url('close-groups')?>" class="menu-link alert alert-info m-1">
                  <div class="menu-text"> Close Groups </div>
               </a>
<?php }?>
               <a href="<?= base_url('active-groups')?>" class="menu-link alert alert-info m-1">
                  <div class="menu-text"> Active Groups </div>
               </a>

            </div>

         </div>
      </div>

<?php
  if($sessionuser->type=='sadmin')
  {
?>
      <div class="menu-header"> User </div>
      <div class="menu-item has-sub">
         <a href="javascript:;" class="menu-link">
            <div class="menu-icon">
               <i class="far fa-lg fa-fw me-2 fa-user-circle"></i>
               <span class="w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px"></span>
            </div>
            <div class="menu-text d-flex align-items-center"> Manage User </div>
            <span class="menu-caret"><b class="caret"></b></span>
         </a>
         <div class="menu-submenu">

            <div class="menu-item">

               <a href="<?= base_url('add-user')?>" class="menu-link alert alert-info m-1">
                  <div class="menu-text"> Add User </div>
               </a>

               <a href="<?= base_url('all-users')?>" class="menu-link alert alert-info m-1">
                  <div class="menu-text"> All Users </div>
               </a>

               <!-- <a href="<?= base_url('role-category')?>" class="menu-link alert alert-info m-1">
                  <div class="menu-text"> Role Category </div>
               </a> -->

            </div>

         </div>
      </div>
<?php }?>

   </div>

</div>
</div>
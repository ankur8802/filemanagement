      <script data-cfasync="false" src="<?= base_url()?>assets/js/email-decode.min.js"></script>
      <script src="<?= base_url()?>assets/js/vendor.min.js" type="ab0f1bdec2906aedac6ca429-text/javascript"></script>
      <script src="<?= base_url()?>assets/js/app.min.js" type="ab0f1bdec2906aedac6ca429-text/javascript"></script>
      <script src="<?= base_url()?>assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="ab0f1bdec2906aedac6ca429-text/javascript"></script>
      <script src="<?= base_url()?>assets/js/world-mill.js" type="ab0f1bdec2906aedac6ca429-text/javascript"></script>
      <script src="<?= base_url()?>assets/js/apexcharts.min.js" type="ab0f1bdec2906aedac6ca429-text/javascript"></script>
      <script src="<?= base_url()?>assets/js/demo/dashboard.demo.js" type="ab0f1bdec2906aedac6ca429-text/javascript"></script>
      <script src="<?= base_url()?>assets/js/rocket-loader.min.js" data-cf-settings="ab0f1bdec2906aedac6ca429-|49" defer=""></script>
      <script defer src="<?= base_url()?>assets/js/demo/dashboard.demo.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if($this->session->flashdata('success'))
{
?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('success');?>", "success"); 
</script>

<?php
}
?>

<?php
if($this->session->flashdata('error'))
{
?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('error');?>", "error"); 
</script>

<?php
}
?>

<?php
if($this->session->flashdata('warning'))
{
?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('warning');?>", "warning"); 
</script>

<?php
}
?>
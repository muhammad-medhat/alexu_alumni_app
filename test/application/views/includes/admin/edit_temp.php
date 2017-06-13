<?php $this->load->view('includes/admin/header'); ?>
<div id="main_content">
<?php if($this->session->flashdata('message')){?>
<div class='flash_data'>
  <?= $this->session->flashdata('message')?>
</div>
<?php } ?>
<?php $this->load->view('includes/admin/admin_bar')?>
<?php $this->load->view($main_content); ?>
</div>


<?php $this->load->view('includes/admin/footer'); ?>


<div id='registration'>
<?php if (validation_errors() ) { ?>
  <div class='errors'>
    <?php echo validation_errors('<p class="error">'); ?>

  </div>
<?php } ?>
<fieldset>
  <?php
echo form_open('alumni/update');
    $this->load->view('signup/personal_edit');
$image = base_url() ."/images/b.png";
    echo form_submit('submit', $this->lang->line('submit'), 'class="reg" ' ."style='background-image:url($image)'");

    echo form_close(); 
?>
  

  </fieldset>
<?php ?>
</div>

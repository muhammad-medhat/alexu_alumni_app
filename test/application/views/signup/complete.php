<style type="text/css">

</style>
<fieldset>
<p><?php echo $this->lang->line('registration_success_upload_msg')?> </p>
<?php
//var_dump($this->session->userdata);
$data = $this->session->userdata('registered_user_data');
//var_dump($data);
$alumni_id = $data['alumni_id'];
?>
<legend><?php echo $this->lang->line('registration_info')?></legend>
  <table>
<?php foreach($data as $k=>$v) {?>
      <tr>
      <td class='label'><?=$k ?></td>
      <td><?=$v?></td>
      </tr>
<?php } ?>
  </table>
<fieldset>
<legend><?php echo $this->lang->line('upload_cert')?></legend>
  <?php
echo form_open_multipart("alumni/upload_cert/$alumni_id");
      //echo "<p>يجب عمل مسح ضوئي لشهادة التخرج او الافادة قبل التسجيل</p>";
      $data_upload=array(
        'name'=>'certeficate', 
        'class'=>'file'
      );
      
?>
<label class="cabinet"> 
  <?php echo form_upload($data_upload ); ?>
</label>
<?php
      echo form_submit('upload', $this->lang->line('upload_cert') , 'class="upload"');
    echo form_close();
  ?>
</fieldset>
  </fieldset>

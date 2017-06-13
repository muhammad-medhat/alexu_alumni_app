  <fieldset>
  <legend><?php echo $this->lang->line('contact_info')?></legend>
  <?php foreach($alumni_personal_data as $k=>$v){?>
          <tr>
            <td><?=$this->lang->line($k)?></td>
            <td><?= form_input($k, $v) ?></td>
          </tr>
  <?php } ?>
</fieldset>

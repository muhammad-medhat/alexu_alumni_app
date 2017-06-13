<?php 
$def_lang = $this->config->item('language');
$site_lang = $this->session->userdata('site_lang');
empty($site_lang)? $deg_lang:$site_lang;
//$lang->$this->session->userdata('role');
echo form_open('admin/change_settings');?>
<?php $exceptions = array('xxx')?>
<table>
<?php foreach ($settings as $key) {?>
  <?php if(!in_array($key, $exceptions)) { ?>
      <?php switch($key->control){
        case '1': //control is input box?>
          <tr>
            <td><?= $key->$site_lang ?></td>
            <td><?= form_input($key->key_name, $key->value); ?></td>
          </tr>
        <?php 
            break;
        case '2': //control is dropdown menu
          $source = simple_array($this->admin_model->get_control_values(2), 'control_value');
?>
          <tr>
            <td><?= $key->$site_lang ?></td>
            <td><?= form_dropdown($key->key_name, $source, $key->value); ?></td>
          </tr>
        <?php 
            break;
          default: 
        ?>
          <tr>
            <td><?= $key->$site_lang ?></td>
            <td><?= form_input($key->key, $key->value); ?></td>
          </tr>
        <?php break; 
      }
      ?>
  <?php }?>
<?php } ?>
<tr>
<td colspan='2'><?= form_submit('submit', $this->lang->line('submit'))?></td>
</tr>
</table>
<?= form_close();?>

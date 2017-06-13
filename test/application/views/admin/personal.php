<?php if(validation_errors()) {?>

<div class='errors'>
    <?php echo validation_errors('<p class="error">'); ?>

  </div>

<?php } ?>

<?php
//var_dump($user);

?>
<div class='single'>
<?= form_open('admin/change_personal');?>
<?php $exceptions = array('id')?>
<table>

        <tr>
          <td><?= $this->lang->line('name')?></td>
          <td><?= form_input('name', $user->name)?></td>
        </tr>
        <tr>
          <td><?= $this->lang->line('username')?></td>
          <td><?= form_input('username', $user->username)?></td>
        </tr>
        <tr>
          <td><?= $this->lang->line('email')?></td>
          <td><?= form_input('email', $user->email)?></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
         <tr>
            <td><?= $this->lang->line('password')?></td>
            <td><?= form_password('password', '')?></td>
          </tr>
          <tr>
            <td><?= $this->lang->line('confirm')?></td>
            <td><?= form_password('confirm','')?></td>
          </tr>
<tr>
<td colspan='2'><?=form_submit('submit', $this->lang->line('submit'))?></td>
</tr>
               
</table>
<?= form_close();?>
</div>


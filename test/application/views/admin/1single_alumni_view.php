<style type="text/css" >
.data input, .data select{width:300px;}
</style>
<?php

$fid = $alumni->fid;
$gid = $alumni->gid;
$certificate_type_id = $alumni->certificate_type_id;

        $cert_image = base_url() .APPPATH .uploads_folder 
          .DIRECTORY_SEPARATOR .$alumni->cert_file;
$gid_list = array();
foreach ($grades as $key) {
  $gid_list[$key->id] = $key->$grades_field;
}
$fid_list = array();
foreach ($faculties_list as $key) {
  $fid_list[$key->id] = $key->$faculties_field;
}

//$gid_list = $grades;
//var_dump($fid_list);
//echo $this->db->last_query();
?>
<?= form_open("admin/perform_edit/$alumni->alumni_id")?>
      <table class='single' >
        <tr>
          <td colspan='2'><img src='<?=$cert_image?>' /></td>
        </tr>
<?php foreach($alumni as $key=>$value) {?>
        <tr>
<?php 
/*
switch (gettype($value) ) {
  case "string": $control = form_input($key, $value);
break;
default:
  if(gettype($value)!=NULL)
    $control = gettype($value);
  else
    $control = "XXX";
}*/
?>
          <td><?=$key ?></td>
          <td class='label'><?= $this->lang->line($key)?></td>
          <!-- <td class='data'><?= $value ." === " . gettype($value);//$control?></td> -->
          <td class='data'><?php echo add_control($key, $value)?></td>
<?php //}?>
        </tr>
<?php } ?>

        <tr>
          <td  colspan='2'>
<?= form_submit('submit', $this->lang->line('edit_data'));?>
          </td>
        </tr>
      </table>
<?= form_close() ?>
<?php
function add_control($name, $value, $enabled = true){
  $control = '';
  $type = gettype($value);
  $list_controls = array('fid', 'gid');
  if($enabled){
     switch($type){
     case 'string':
       if(is_numeric($value)){
         if(in_array($name, $list_controls)){
           $list ="$$name" .'_list' ;
           var_dump((array)$list);
            $control = form_dropdown($name, $list , $value) ."name is $name, value is $value";
         }
       }
       else{$control=$name;}
         break;
      default:
        $control = form_input($name, $value);
     }
  } else{
     $control = $value;
     }
     
     return $control ;
     }
  
?>

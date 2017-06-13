<fieldset>
<legend><?php echo $this->lang->line('academic_info') ;?></legend>
<?php
  $name       = $this->input->post('name'); 
  $fid        = $this->input->post('faculty'); 
  $gid        = $this->input->post('grade_id'); 
  $year       = $this->input->post('graduation_year'); 
  $department = $this->input->post('department'); 
  $division   = $this->input->post('division'); 
  $certificate_type_id = $this->session->userdata('ac_level'); 
//echo"<div class=query>dept is $department and dev is $division</div>";
//var_dump($this->session->userdata);

$field = $this->alumni_model->translate_field('arabic', $this->faculties_table, true); 
 $grades_field = $this->alumni_model->translate_field('arabic', $this->academic_degrees_table, true); 

 $certificate_field = $this->alumni_model->translate_field('arabic', $this->academic_degrees_table, true); 

  $fac_arr = simple_array($faculties_list,$field);
  $grades_arr = simple_array($grades,  $grades_field);
  $c_type_arr = simple_array($ac_degrees, $certificate_field);
  echo form_input( 'name', set_value('name', $name), 'placeholder="' .$this->lang->line('full_name') .'"' );
  echo form_dropdown('fid', $fac_arr, $fid);

  echo form_input('graduation_year', set_value('graduation_year', $year), 'class="year" maxlength="4" onkeypress="return isNumber(event)" placeholder="'.$this->lang->line('graduation_year').'" style="width:60px"');
  echo form_dropdown('gid', $grades_arr, $gid);
 
  echo form_input('department', set_value('department', $department), 'placeholder="'.$this->lang->line('department').'"');
  echo form_input('division', set_value('division', $division), 'placeholder="'.$this->lang->line('division').'"');
  echo form_dropdown('certificate_type_id', $c_type_arr, $certificate_type_id);
  
    ?>
  </fieldset>

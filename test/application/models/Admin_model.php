<?php

class Admin_model extends MY_Model {

  var  $uploads_folder;

  var $alumni_data_table      ; 
  var $alumni_main_table      ; 
  var $users_table            ;
  var $faculties_table        ;
  var $academic_degrees_table ;
  var $degrees_table ;





  function Admin_model()
  {
    parent::__construct();
    $this->uploads_folder = realpath(APPPATH .'uploads');
/*    
      $this->alumni_data_table      = $this->db->dbprefix(alumni_data_table);
      $this->alumni_data_other_table      = $this->db->dbprefix(alumni_data_other_table);
      $this->alumni_main_table      = $this->db->dbprefix(alumni_main_table);
      $this->users_table            = $this->db->dbprefix(users_table);
      $this->faculties_table        = $this->db->dbprefix(faculties_table);
      $this->academic_degrees_table = $this->db->dbprefix(academic_degree_table);
      $this->degrees_table          = $this->db->dbprefix(degrees_table);
 */
  }
  
  function do_upload()
  {
    $config = array(
        'upload_path'  => $this->uploads_folder,
        'allowed_types' => 'xlsx|xls',
       // 'max_size'     => 1024 * 8,
        'encrypt_name'  => TRUE
       );
    $this->load->library('upload', $config);
    $this->upload->do_upload('alumni_file');
  }

  function get_num_alumni1111(){

      $this->db->select("*", true);
      $this->db->from("$this->alumni_data_table` g");

      $this->db->join("$this->users_table u",             'g.alumni_id=u.id',           'left');
      $this->db->join("$this->faculties_table f",         'f.id=g.fid',                 'left'); 
      $this->db->join("$this->academic_degrees_table d",  'd.id=g.certificate_type_id', 'left');

      //$this->db->where('u.approved', $approved);
      $query = $this->db->get();
      
      return  $query->num_rows();
  }
  function get_num_alumni(){

      $this->db->select("*", true);
      $this->db->from("$this->alumni_data_table` g");
      $this->db->join("$this->users_table u",             'g.alumni_id=u.id',           'left');
      $this->db->join("$this->faculties_table f",         'f.id=g.fid',                 'left'); 
      $this->db->join("$this->academic_degrees_table d",  'd.id=g.certificate_type_id', 'left');
      $query = $this->db->where("g.graduation_year != ", "")
        ->where('usertype', 'الخريجين')
        ->get();

      
      return  $query->num_rows();
  }

  function get_all($_limit=0, $_offset=0)
  {

 $fac_field = $this->alumni_model->translate_field('arabic', $this->faculties_table, true); 

 $grades_field = $this->alumni_model->translate_field('arabic', $this->academic_degrees_table, true); 
  //$this->output->enable_profiler(TRUE);
      $this->db->select("`alumni_id`,u.name, g.`graduation_year`, g.cert_file,
              f.$fac_field as faculty, 
              d.$grades_field as certificate_type, 
              approved", true);
      $this->db->from("$this->alumni_data_table` g");
      $this->db->join("$this->users_table u",             'g.alumni_id=u.id',           'left');
      $this->db->join("$this->faculties_table f",         'f.id=g.fid',                 'left'); 
      $this->db->join("$this->academic_degrees_table d",  'd.id=g.certificate_type_id', 'left');
      $query = $this->db->where("g.graduation_year != ", "")
        ->where('usertype', 'الخريجين')
        ->limit($_limit, $_offset)
        ->order_by('u.id', 'desc')
        ->get();
      return $query->result(); 
      
  }
  
  function publish($alumni_id, $approved=1){
    
    //$p_dump = print_r($alumni_id, TRUE  );
    
    //write_file(APPPATH ."/uploads/request.log", $p_dump, 'a');


    $this->db->set('approved', $approved)
      ->where_in('id', $alumni_id)
      ->update($this->users_table);

    echo $this->db->last_query() ;
  }

  function toggle_state($_alumni_id)
  {
    $q = "update $this->users_table set approved=IF(approved=1, 0, 1) where id=$_alumni_id";
    $this->db->query($q);
  }
  function get_alumni($_alumni_id)
  {
      $faculty_field = $this->translate_field('faculty', $this->faculties_table);
      $academic_degree_field = $this->translate_field('scientific_degree', $this->academic_degrees_table);

      $this->db->select (
        "g.*, 
        u.name,u.email,u.username, f.$faculty_field,
        d.$academic_degree_field", true); 
      $this->db->from(  "$this->alumni_data_table g" );

      $this->db->join("$this->users_table u",             'g.alumni_id=u.id',             'left');
      $this->db->join("$this->faculties_table f",         'f.id=g.fid',                   'left');
      $this->db->join("$this->academic_degrees_table ac", 'ac.id=g.certificate_type_id', 'left');
      $this->db->join("$this->degrees_table d",           'd.id=g.gid',                   'left');

      $this->db->where ('u.id',$_alumni_id);
      
    $q = $this->db->get();
    return $q->row();
  }

  function update_alumni( $alumni_id, $data_arr)
  {
    $user_args = array(
      'name'=>$data_arr['name'], 
      'email'=>$data_arr['email']
    );
    $alumni_array = array(
      'fid'                 => $data_arr['fid'] , 
      'gid'                 => $data_arr['gid'] ,
      'certificate_type_id' => $data_arr['certificate_type_id'] , 
      'graduation_year'     => $data_arr['graduation_year'] , 
      'department'          => $data_arr['department'] , 
      'division'            => $data_arr['division'] 
    );

    $remove = array();
    foreach (array_merge($alumni_array, $user_args) as $key=>$value) {
      $remove[] = $key;
    }
    
      $alumni_additional_info = _remove_items( $remove, $data_arr);
    
      $this->db->where('alumni_id', $alumni_id);
      $this->db->update($this->alumni_data_table, $alumni_array );

      $user_id = $alumni_id;
      $this->db->where('id', $user_id);
      $this->db->update($this->users_table, $user_args );
      
      if($alumni_additional_info){
        $this->db->where('alumni_id', $alumni_id);
        $this->db->update($this->alumni_data_other_table, $alumni_additional_info);
      }
  }
  
  function get_alumni_data_other($alumni_id){
      $this->db->where('alumni_id', $alumni_id);
      $q = $this->db->get($this->alumni_data_other_table);
      _db_debug();
      if($q)
        return $q->row();
      else
        return null;
  }
  
  function get_settings(){
    $settings = $this->db->order_by('record_order', 'ASC')->get($this->settings_table);
    if($settings->num_rows()>1)
      return $settings->result();
    else
      return $settings->row();
  }
  function get_settings_value($key_name, $value=true){

    foreach ($this->settings as $key) {
      if($key->key_name == $key_name){
        if($value)
          return $key->value;
        else// return object
          return $key;
      }
    }
    return '';
  }

  function update_settings($array){
    $this->db->trans_start();
    foreach ($array as $key_name=>$value) {
      $this->db->query("update $this->settings_table set value = '$value' where key_name='$key_name';");

      //echo "<div class='query'>" .$this->db->last_query() ."</div>";
    }
    $this->db->trans_complete(); 

  }
  function update_personal($id, $array){
    $this->db->where('id', $id);
    $this->db->update($this->users_table, $array);
  }


  function get_controls(){
    return $this->db->get('controls')->result();
  }

  function get_control($id){
    return $this->db->get_where('controls', array('id'=>$id))->row();
  }
  function get_control_values($id){
    return $this->db->get_where('control_values', array('control_id'=>$id))->result();
  }

}

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
    
      $this->alumni_data_table      = $this->db->dbprefix(alumni_data_table);
      $this->alumni_data_other_table      = $this->db->dbprefix(alumni_data_other_table);
      $this->alumni_main_table      = $this->db->dbprefix(alumni_main_table);
      $this->users_table            = $this->db->dbprefix(users_table);
      $this->faculties_table        = $this->db->dbprefix(faculties_table);
      $this->academic_degrees_table = $this->db->dbprefix(academic_degree_table);
      $this->degrees_table          = $this->db->dbprefix(degrees_table);

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

  function get_num_alumni()
  {
    $q = 'select count(*) as num from ' .$this->users_table .' where usertype="الخريجين"';
    $query = $this->db->query($q);
    $result = $query->result();
    $cnt = $result[0];
    return $cnt->num;
  }

  function get_all($_limit=0, $_offset=0)
  {

 $fac_field = $this->alumni_model->translate_field('arabic', $this->faculties_table, true); 

 $grades_field = $this->alumni_model->translate_field('arabic', $this->academic_degrees_table, true); 

    $q = "SELECT `alumni_id`,u.name, g.`graduation_year`, g.cert_file,
      f.$fac_field as faculty, 
      d.$grades_field as certificate_type, 
      m.approved 
      FROM `$this->alumni_data_table` g
      left join $this->users_table u on g.alumni_id=u.id
      left join $this->alumni_main_table m on g.alumni_id=m.id
      left join $this->faculties_table f on f.id=g.fid
      left join $this->academic_degrees_table d on d.id=g.certificate_type_id
      where u.usertype='الخريجين' and approved=0 and g.graduation_year!='' order by alumni_id desc, approved";

    //$q = "select * from $this->alumni_main_table where approved=$_approved";

    $limit_string = ($_offset == '')? "limit $_limit":"limit $_offset, $_limit";
    
    $query = $this->db->query("$q $limit_string");
    return $query->result(); 
  }

  function toggle_state($_alumni_id)
  {
    $q = "update $this->alumni_main_table set approved=IF(approved=1, 0, 1) where id=$_alumni_id";
    $this->db->query($q);
  }
  function get_alumni($_alumni_id)
  {
      $faculty_field = $this->translate_field('faculty', $this->faculties_table);
      $academic_degree_field = $this->translate_field('scientific_degree', $this->academic_degrees_table);

      $query = "select 
        g.*, 
        u.name,u.email, f.$faculty_field,
        d.$academic_degree_field 
      from  $this->alumni_data_table g
      
      left join $this->alumni_main_table m on g.alumni_id=m.id
      left join $this->users_table u  on m.user_id=u.id 
      left join $this->faculties_table f on f.id=g.fid
      left join $this->academic_degrees_table ac on ac.id=g.certificate_type_id
      left join $this->degrees_table d on d.id=g.gid

      where m.id=$_alumni_id
      ";
    $q = $this->db->query($query);
    return $q->row();
  }

  function _remove_items($items, $source){
    foreach ($items as $i) {
      unset($source[$i]);
    }
    return $source;
  }

  function update_alumni( $alumni_id, $data_arr)
  {
    $user_args = array(
      'name'=>$data_arr['name'], 
      'email'=>$data_arr['email']
    );
    $alumni_array = array(
      'fid'             =>     $data_arr['fid'] , 
      'gid'             =>     $data_arr['gid'] ,
      'certificate_type_id'=>  $data_arr['certificate_type_id'] , 
      'graduation_year'=>      $data_arr['graduation_year'] , 
      'department' =>          $data_arr['department'] , 
      'division'=>             $data_arr['division'] 
    ); 
    $remove = array();
    foreach (array_merge($alumni_array, $user_args) as $key=>$value) {
      $remove[] = $key;
    }
    $alumni_additioal_info = $this->_remove_items( $remove, $data_arr);
      $this->db->where('alumni_id', $alumni_id);
      $this->db->update($this->alumni_data_table, $alumni_array );


      $user_id = $this->get_userid($alumni_id);
      $this->db->where('id', $user_id);
      $this->db->update($this->users_table, $user_args );

      $this->db->where('alumni_id', $alumni_id);
      $this->db->update($this->alumni_data_other_table, $alumni_additioal_info);

  }
  
  function get_userid($alumni_id){
    $this->db->where('id', $alumni_id);
    $ret = $this->db->get($this->alumni_main_table );
    if($ret)
      return $ret->row()->user_id;
    else
      return 'NULL';
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

}

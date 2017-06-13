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
  
    $q = "SELECT `alumni_id`,u.name, g.`graduation_year`, g.cert_file,
      f.arabic as faculty, 
      d.arabic as certificate_type, 
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

}

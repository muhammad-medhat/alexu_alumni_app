<?php

class Alumni_model extends MY_Model {

  var $alumni_data_table      ; 
  var $alumni_main_table      ; 
  var $users_table            ;
  var $faculties_table        ;
  var $academic_degrees_table ;
  var $degrees_table ;
  var $uploads_folder;

  function Alumni_model(){
    parent::__construct();
   $this->uploads_folder = realpath(APPPATH .'uploads');

   $this->file = $this->uploads_folder .'/qq.sql';
      $this->load->helper('file');      

  }
  function get_num_search($_fid=0, $_year=0, $_ac_degree=0, $_name='', $year_r='')
  {
      $this->db->from("$this->alumni_data_table g");
      $this->db->join("$this->users_table u", 'g.alumni_id=u.id', 'left');
      ###$this->db->join("$this->alumni_main_table m", 'g.alumni_id=m.id', 'left');
      $this->db->join("$this->faculties_table f", 'f.id=g.fid', 'left');
      $this->db->join("$this->academic_degrees_table d", 'd.id=g.certificate_type_id', 'left');
      $this->db->where('u.approved', 1);
      $this->db->where('u.usertype','الخريجين');
      


    if($_fid!=0)
      $this->db->where('g.fid', $_fid);
    if($_year!=0){
      switch ($year_r) {
        case 'lt':
          $this->db->where('g.graduation_year <', $_year);
          break;
        case 'gt':
          $this->db->where('g.graduation_year >', $_year);
           break;
        default:
          $this->db->where('g.graduation_year', $_year);

          break;
      }
    }
    if($_ac_degree!=0)
      $this->db->where('g.certificate_type_id', $_ac_degree);

    if($_name!='')
      $this->db->where( "u.name like '$_name%'");
   $query = $this->db->count_all_results();

    return $query;
  }
  
  function get_all($_limit=0, $_offset=0, $_fid=0, $_year=0, $_ac_degree=0, $_name='', $year_r=''){
      
      $faculty_field = $this->translate_field('faculty', $this->faculties_table);
      $academic_degree_field = $this->translate_field('scientific_degree', $this->academic_degrees_table);

      $this->db->select(" alumni_id,u.name, graduation_year, f.$faculty_field, d.$academic_degree_field  ");
      $this->db->from("$this->alumni_data_table g");
      $this->db->join("$this->users_table u", 'g.alumni_id=u.id', 'left');
      ###$this->db->join("$this->alumni_main_table m", 'g.alumni_id=m.id', 'left');
      $this->db->join("$this->faculties_table f", 'f.id=g.fid', 'left');
      $this->db->join("$this->academic_degrees_table d", 'd.id=g.certificate_type_id', 'left');
      //$this->db->where('u.approved', 1);
      $this->db->where('u.usertype','الخريجين');
    if($_fid!=0)
      $this->db->where('g.fid', $_fid);
    if($_year!=0){
      switch ($year_r) {
        case 'lt':
          $this->db->where('g.graduation_year <', $_year);
          break;
        case 'eq':
          $this->db->where('g.graduation_year', $_year);
           break;
        case 'gt':
          $this->db->where('g.graduation_year >', $_year);

          break;

        default:
          $this->db->where('g.graduation_year >=', $_year);

          break;
      }
    }
    if($_ac_degree!=0)
      $this->db->where('g.certificate_type_id', $_ac_degree);

    if($_name!='')
      $this->db->where( "u.name like '$_name%'");

    $this->db->limit($_limit, $_offset);
    $this->db->order_by('g.fid', 'random');
    $query = $this->db->get();
    
    
    switch(true){
      case ($query->num_rows()>1):
        return $query->result();
      case $query->num_rows == 1:
        return $query->row();
      default:
        return null;
    }

  }

  function get_num_fac($_fid)
  {
    $q = "SELECT count(*) as number 
      FROM `$alumni_data_table` g
      left join $users_table u on g.alumni_id=u.id
      left join $faculties_table f on f.id=g.fid
      where u.usertype='الخريجين' and f.id=$_fid
      ";
    $query = $this->db->query("$q ");
    $result = $query->result();
    $cnt = $result[0];
    return $cnt->number;

  }

  function get_num_all()
  {
    
    $q = "SELECT count(*) as number 
      FROM `$this->alumni_data_table` g
      left join $this->users_table u on g.alumni_id=u.id
      --- ### left join $this->alumni_main_table m on g.alumni_id=m.id
      left join $this->faculties_table f on f.id=g.fid
      where u.usertype='الخريجين' and u.approved=1
      ";
    $query = $this->db->query("$q ");
    $result = $query->result();
    $cnt = $result[0];
    //echo"<div class='query'>" .$this->db->last_query() ."</div>";
    return $cnt->number;
  }

  function get_academic_levels()
  {
    $this->db->order_by('order asc');
    $ac_levels = $this->db->get(academic_degree_table);
    return $ac_levels->result();

  }

  function get_faculties()
  {
    $faculties = $this->db->get(faculties_table);
    return $faculties->result();
  }

  function get_faculties_ddl()
  {
    $faculties = $this->get_faculties();
    $ret = array();
    /*
    foreach ($faculties as $key=>$value) {
      $ret[$key] = $value;
    }
    return $ret;*/
    $faculties = $this->get_faculties();
    foreach ($faculties as $f) {
      $ret[$f->id] = $f->arabic;
    }
      return $ret;
  }

  function get_degrees()
  {
    //$this->db->select("id, arabic");
    $this->db->where("order > ", "0");
    $deg = $this->db->get(degrees_table);
    return $deg->result();
  }


  function get_years()
  {

    /*$q = "select distinct(graduation_year) from $this->alumni_data_table where graduation_year!='' 
      order by graduation_year desc";
    $query = $this->db->query($q);
     */
    $this->db->select('graduation_year', true);
    $this->db->from("$this->alumni_data_table g");
    $this->db->join("$this->users_table u", 'g.alumni_id=u.id');
    $this->db->where('u.approved', 1);
    $this->db->group_by('graduation_year');
    $this->db->order_by('graduation_year', 'desc');


    return $this->db->get()->result();
  }

  function get_num_res($_fid=0, $_year=0, $_ac_degree=0)
  {
    $q = "SELECT count(*) as number 
      FROM `$this->alumni_data_table` g
      left join $this->users_table u on g.alumni_id=u.id
      left join $this->faculties_table f on f.id=g.fid
      where u.usertype='الخريجين' ";
    if($_fid!=0)
      $q .= " and f.id=$_fid";
    if($_year!=0)
      $q .= " and g.graduation_year=$_year";
    if($_ac_degree!=0)
      $q .= " and g.certificate_type_id=$_ac_degree";

    $query = $this->db->query("$q ");
    $result = $query->result();
    $cnt = $result[0];
    return $cnt->number;
  }

  function alumni_exist($alumni_id){
    //returns number of rows
    $this->db->where('id', $alumni_id);
    $q = $this->db->get($this->users_table);
    return $q->num_rows();
  }

  function get_alumni($_alumni_id, $_approved=1 )
  {
      $faculty_field = $this->translate_field('faculty', $this->faculties_table);
      $academic_degree_field = $this->translate_field('scientific_degree', $this->academic_degrees_table);
      $degree_field = $this->translate_field('degree', $this->degrees_table);


      $this->db->select("g.alumni_id,g.graduation_year, ac.$academic_degree_field,g.fid, g.gid, g.certificate_type_id,g.cert_file, u.name, f.$faculty_field, g.department, g.division,d.$degree_field", true);
      $this->db->from("$this->alumni_data_table g");
      ###$this->db->join("$this->alumni_main_table m", 'g.alumni_id=m.id', 'left');
      $this->db->join("$this->users_table u", 'g.alumni_id=u.id' , 'left');
      $this->db->join("$this->faculties_table f", 'f.id=g.fid', 'left');
      $this->db->join("$this->academic_degrees_table ac", 'ac.id=g.certificate_type_id', 'left');
      $this->db->join("$this->degrees_table d", 'd.id=g.gid', 'left');
      $this->db->where('u.id', $_alumni_id);
      $this->db->where('u.approved', $_approved);
      $q = $this->db->get();

      if($q->num_rows==1)
        return $q->row();
      return null;

  }

  function get_alumni_data($alumni_id){
    $this->db->where('alumni_id', $alumni_id);
    return $this->db->get($this->alumni_data_other_table)->row();
  }

  function get_user($user_id){
    return $this->db->get_where($this->users_table, array('id', $user_id))->row();
  }
  function add_user($_name, $_email, $_username, $_password)
  {

    $name  = $_name;
    $email = $_email;
    $username = $_username;
    $password = $_password;
    $registerDate = Date("Y-m-d h:m:s");
    $usertype = 'الخريجين';

/*    $q = "insert into " .$this->use`rs_table ."(name, email, username, password,  usertype) 
      values('$name', '$email', '$username', md5('$password'), '$usertype')";
    $this->db->query($q);*/
    $ins_arr = array(
      'name'          => $name, 
      'email'         => $email,
      'username'      => $username,
      'password'      => $password,
      //'registerDate'  => Date("Y-m-d h:m:s"),
      'usertype'      => 'الخريجين'
    );
    $this->db->insert($this->users_table, $ins_arr);
    //echo $this->db->last_query();
  }

  function add_alumni($_user_id, $_approved)
  {
    $q = "insert into " .$this->alumni_main_table ."(user_id, approved) values ($_user_id, $_approved)";
    $this->db->query($q);
    //echo "<br>" .$this->db->last_query();

  }

  function add_alumni_data111(
      $_alumni_id, 
      $_year ,      $_faculty,    $_ac_level, 
      $_department='', $_devision='', $_phone='', 
      $_country='',    $_city='',     $_location='', 
      $_job='',      $_grade_id,      $_mobile=''
  )
  {
       
      $q = "
      insert into $this->alumni_data_table 
      (
      `alumni_id`, 
      `graduation_year`, `fid`      ,  `certificate_type_id`,
      `department`     , `division` ,  `phone`,
      `country`        , `city`     ,  `address`,
      `job`            , `gid`      ,  `mobile`) VALUES ( 
        $_alumni_id, 
      '$_year'        , $_faculty , $_ac_level, 
      '$_department'  , '$_devision', '$_phone', 
      '$_country'     , '$_city'    , '$_location', 
      '$_job'         , $_grade_id, '$_mobile'
    )";
    $this->db->query($q);
    //echo "<br>" .$this->db->last_query();
  }
 
  function update_alumni($alumni_id, $arr)
  {
    if($alumni_id && !empty($arr)){
      //$email = $arr['email'];

     
      $args = _remove_items(array('email', 'submit'), $arr);
      $this->db->where('alumni_id', $alumni_id);
      $this->db->update($this->alumni_data_other_table, $args);
      $q2 = "update $this->users_table set email ='$email' where id=$alumni_id";
      $query2 = $this->db->query($q2);
    }
  }

  function get_faculty_name($_fid)
  {
      $faculty_field = $this->translate_field('faculty', $this->faculties_table, true);

    $this->db->select($faculty_field);
    $this->db->where('id',$_fid);
    $query = $this->db->get($this->faculties_table);
    $res = $query->result();
    //var_dump($res);
   // echo $this->db->last_query();
    $arr = $res[0];
    return $arr->$faculty_field;
  }

  function get_ac_degree_name($_fid)
  {
      $field = $this->translate_field('faculty', $this->academic_degrees_table, true);
    
    $this->db->select($field);
    $this->db->where('id',$_fid);
    $query = $this->db->get($this->academic_degrees_table);
    $res = $query->result();
    //var_dump($res);
    $arr = $res[0];
    return $arr->$field;
  }

  function get_degree_name($_fid)
  {
    $field = $this->translate_field('faculty', $this->degrees_table, true);
    $this->db->select($field);
    $this->db->where('id',$_fid);
    $query = $this->db->get($this->degrees_table);
    $res = $query->result();
    //var_dump($res);
    $arr = $res[0];
    return $arr->$field;
  }

  function update_cert($_alumni_id, $_ext)
  {
    //$alumni_id = pathinfo($_filename);
      $q = "update $this->alumni_data_table set cert_file='$_alumni_id.$_ext' where alumni_id=$_alumni_id";
      //echo "<p class='query'>$q</p>";
      $this->db->query($q);
  }


  function do_upload($_file_name)
  {
    $config = array(
        'upload_path'  => $this->uploads_folder,
        'allowed_types' => 'jpg|jpeg|gif|png',
        'file_name' => $_file_name
       );
    $this->load->library('upload', $config);
    $this->upload->do_upload('certeficate');
    
    $image_data = $this->upload->data(); 
    $config_image = array(
      'source_image' => $image_data['full_path'], 
      'new_image' => $this->uploads_folder .'/thumbs', 
      'maintain_ratio' =>true, 
      'width'=>200, 
      'height'=>100
    );

    //Create a thumbnails
    $this->load->library('image_lib', $config_image);
    $this->image_lib->resize();
  }

  function translate_field($_field_name, $_table_name, $only_name=false){
      $lang = $this->session->userdata('site_lang');
      $field = $lang;
      if(!$lang){
        $field = $this->config->item('language');
      } else{
        if($lang == 'english'){
          if(!$this->_is_column_exist($lang, $_table_name))
           $field = 'name';
        }
      }
      if(!$only_name)
        return "$field as $_field_name";
      else
        return $field;
  }
  function _is_column_exist($column_name, $table_name){
    $q = "select * from information_schema.columns where
      table_schema ='" .$this->db->database ."' and table_name = '$table_name' and column_name = '$column_name'";
      $query = $this->db->query($q);
      return ($query->num_rows() ==1);
        
  }
  function alumni_registration($data_arr){
  
    $user_args = array(
      'name'=>$data_arr['name'], 
      'email'=>$data_arr['email'],
      'username'=>$data_arr['username'],
      'password'=>md5($data_arr['password']),
      'usertype'=>'الخريجين'
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
    $alumni_additional_info = _remove_items($remove, $data_arr);
    $exception = array('retype', 'submit');
    $alumni_info = array();
    foreach ($alumni_additional_info as $key=>$v) {
      if(! in_array($key, $exception))
        $alumni_info[$key] = $v;
    }
    // apply transaction
    $this->db->trans_start();    
    
    $this->db->insert($this->users_table, $user_args);  
    $user_id = $this->db->insert_id();
    _db_debug("-----user id is $user_id");
/*
    $this->add_alumni($user_id, 0);
    $alumni_id = $this->db->insert_id();
_db_debug("--main---user id is $user_id -- alumni is $alumni_id");
 */ 
    $alumni_id = $user_id;
    $alumni_array = array_merge($alumni_array, array('alumni_id'=>$alumni_id));
    
    $this->db->insert($this->alumni_data_table, $alumni_array);

    $this->session->set_userdata('registered_alumni_id', $alumni_id);
    _db_debug("--data---user id is $user_id");  

    $alumni_additional = array_merge(array('alumni_id'=>$alumni_id), $alumni_info);    
    $this->db->insert($this->alumni_data_other_table, $alumni_additional);

    _db_debug("--other---user id is $user_id");
    $this->db->trans_complete();
  }
###################################   SETTINGS   ####################################################
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
}

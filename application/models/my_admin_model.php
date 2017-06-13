<?php

class MY_admin_model extends MY_Model{
  
  var $alumni_data_table      ; 
  var $alumni_main_table      ; 
  var $users_table            ;
  var $faculties_table        ;
  var $academic_degrees_table ;
  var $degrees_table ;
  var $uploads_folder;

  function My_admin_model(){
    parent::__construct();
        $this->uploads_folder = realpath(APPPATH .'uploads');
      $this->alumni_data_table      = $this->db->dbprefix(alumni_data_table);
      $this->alumni_main_table      = $this->db->dbprefix(alumni_main_table);
      $this->users_table            = $this->db->dbprefix(users_table);
      $this->faculties_table        = $this->db->dbprefix(faculties_table);
      $this->academic_degrees_table = $this->db->dbprefix(academic_degree_table);
      $this->degrees_table          = $this->db->dbprefix(degrees_table);

   $this->uploads_folder = realpath(APPPATH .'uploads');

   $this->file = $this->uploads_folder .'/qq.sql';
  }


  function do_upload()
  {
    $config = array(
        'upload_path'  => $this->uploads_folder,
        'allowed_types' => 'xlsx|xls',
        'encrypt_name'  => FALSE
       );
    $this->load->library('upload', $config);
    $this->upload->do_upload('alumni_file');
  }

  function get_degid($_degname)
  {
    $this->db->where("arabic", $_degname);
    $deg = $this->db->get($this->degrees_table);
    $res = $deg->row('id');
    return $res;
  }
/*
  function get_secid($_secname)
  {
    $this->db->where("name", $_secname);
    $deg = $this->db->get($this->sections_table);
    $res = $deg->row('id');
    return $res;
  }

 */
  function insert_user(){}
  function insert_alumni($_alumni)
  {
    //header('Content-Type: text/html; charset=utf-8');
      //$degid = $this->get_degid($_staff['degid']);
    //$secid = $this->get_secid($_staff['secid']);
    ##
    #the alumni is inserted in 3 tables
    #1.users
    #2.alumni_main
    #3.alumni_data
    $email = ( !isset($_alumni['email']) )? '': $_alumni['email'];
      $alumni_user = array(
        'name'=>$_alumni['name'], 
        'email'=>$email,
        'usertype'=>'الخريجين'
      );
    echo'<div style="font-weight:bold;">'; var_dump($_alumni);echo'</div>';

    if($this->check_name($_alumni['name'])){
      $this->db->insert($this->users_table, $alumni_user);

    $debug = $this->db->last_query() ;
            write_file($this->file, $debug .";\n", 'a');


      $user_id = $this->db->insert_id();
      $alumni_main = array(
        'id'=>$user_id,
        'user_id'=>$user_id, 
        'approved'=>1
      );
      $this->db->insert($this->alumni_main_table, $alumni_main );

            $debug = $this->db->last_query() ;
            write_file($this->file, $debug .";\n", 'a');

      

      $alumni_id = $user_id;//this->db->insert_id();

  $graduation_year =  (isset( $_alumni['year']          ))? $_alumni['year'          ]:'';
  $fid             =  (isset( $_alumni['fid']           ))? $_alumni['fid'           ]:'';
  $job             =  (isset( $_alumni['job']           ))? $_alumni['job'           ]:'';
  $address         =  (isset( $_alumni['address']       ))? $_alumni['address'       ]:'';
  $city            =  (isset( $_alumni['city']          ))? $_alumni['city'          ]:'';
  $country         =  (isset( $_alumni['country']       ))? $_alumni['country'       ]:'';
  $phone           =  (isset( $_alumni['phone']         ))? $_alumni['phone'         ]:'';
  $gid             =  (isset( $_alumni['gid']           ))? $_alumni['gid'           ]:'';
  $birthdate       =  (isset( $_alumni['bdate']         ))? $_alumni['bdate'         ]:'';
  $mobile          =  (isset( $_alumni['mobile']        ))? $_alumni['mobile'        ]:'';
  $nationalnumber  =  (isset( $_alumni['nationalnumber']))? $_alumni['nationalnumber']:'';
  $department      =  (isset( $_alumni['department']    ))? $_alumni['department'    ]:'';
  $division        =  (isset( $_alumni['division']      ))? $_alumni['division'      ]:'';
  $with_honor      =  (isset( $_alumni['with_honor']    ))? $_alumni['with_honor'    ]:'';




      $alumni_data = array(
        'alumni_id'       =>  $alumni_id,
        'graduation_year' =>   $graduation_year ,
        'fid'             =>   $fid             ,
        'job'             =>   $job             ,
        'address'         =>   $address         ,
        'city'            =>   $city            ,
        'country'         =>   $country         ,
        'phone'           =>   $phone           ,
        'gid'             =>   $gid             ,
        //'birthdate'       =>   $bdate           ,
        'mobile'          =>   $mobile          ,
        'nationalnumber'  =>   $nationalnumber  ,
        'department'      =>   $department      ,
        'division'        =>   $division        ,
        'with_honor'      =>   $with_honor    
      );
  $this->db->insert($this->alumni_data_table, $alumni_data);

    $debug = $this->db->last_query() ;
            write_file($this->file, $debug .";\n", 'a');

  $this->count_insert++;
    }
    return;
  }

  function check_name($name){
    $q = $this->db->where('name', $name)->get($this->users_table);
    //echo "<div class='query'>" .$this->db->last_query() .";</div>";
    return $q->num_rows()!=0;
  }

}
?>

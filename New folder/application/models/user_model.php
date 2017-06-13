<?php

class User_model extends MY_Model {

  var $alumni_data_table      ; 
  var $alumni_main_table      ; 
  var $users_table            ;
  var $faculties_table        ;
  var $academic_degrees_table ;
  var $degrees_table ;

  function User_model(){
    parent::__construct();
      $this->alumni_data_table      = $this->db->dbprefix(alumni_data_table);
      $this->alumni_main_table      = $this->db->dbprefix(alumni_main_table);
      $this->users_table            = $this->db->dbprefix(users_table);
      $this->faculties_table        = $this->db->dbprefix(faculties_table);
      $this->academic_degrees_table = $this->db->dbprefix(academic_degree_table);
      $this->degrees_table          = $this->db->dbprefix(degrees_table);
  }



	function validate()
	{
    $username =  $this->input->post('username');

    $password = md5( $this->input->post('password')) ;

    $q = "select * from $this->users_table where 
       username='$username' and
       (password='$password')";
//echo $q;
    
    $query = $this->db->query( $q );


		if($query->num_rows == 1)
		{
			return true;
		}
    else
      return false;
		
	}

  function get_id()
  {
    $this->db->where('username', $this->input->post('username') );
    $query = $this->db->get('users');
    $return_arr = $query->result();

    
    return $return_arr[0]->id; 	
  }

  function get_username($_id)
  {
    $this->db->where('id', $_id) ;
    $query = $this->db->get('users');
    $return_arr = $query->result();
    
    return $return_arr[0]->username; 	
  }

  function get_session_data($_username)
  {

    $q = "select u.id as user_id, 
      g.alumni_id, 
      g.fid, g.address, g.job,  g.address, g.city, g.phone, g.gid, g.month, g.birthdate, g.mobile, g.nationalnumber, g.department, g.division, g.certificate_type_id,g.graduation_year, g.country, 
      u.name, u.email, u.role
      from lk9v6_alumni_data g 
      left join lk9v6_alumni_main m on g.alumni_id=m.id 
      left join lk9v6_users u on m.user_id=u.id 
      where u.username='$_username'";
    $query = $this->db->query($q);
    return $query->result();
  }
    
  
}


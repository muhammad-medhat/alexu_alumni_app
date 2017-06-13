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
      $this->alumni_data_table        = $this->db->dbprefix(alumni_data_table);
      $this->alumni_data_other_table  = $this->db->dbprefix(alumni_data_other_table);
      $this->alumni_main_table        = $this->db->dbprefix(alumni_main_table);
      $this->users_table              = $this->db->dbprefix(users_table);
      $this->faculties_table          = $this->db->dbprefix(faculties_table);
      $this->academic_degrees_table   = $this->db->dbprefix(academic_degree_table);
      $this->degrees_table            = $this->db->dbprefix(degrees_table);
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
      g.*, O.*,
      u.name, u.email, u.role
      from $this->alumni_data_table g 
  
      left join $this->users_table u on g.alumni_id=u.id 
      left join $this->alumni_data_other_table o on g.alumni_id=o.alumni_id
      where u.username='$_username'";
    $query = $this->db->query($q);
    return $query->result();
 /*   $this->db->select("u.id as user_id, 
      g.*, O.*,
      u.name, u.email, u.role", true);

      $this->db->from ("$this->alumni_data_table g"); 
      //$this->db--- left join lk9v6_alumni_main m on g.alumni_id=m.id 
      $this->db->join("$this->users u", 'g.alumni_id=u.id' );
      $this->db->join("$this->alumni_data_other o",'g.alumni_id=o.alumni_id');
      $this->db->where("u.username", $_username);
      $query = $this->db->get();
      return $query->result();
  */
  }
    
  
}


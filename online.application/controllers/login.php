<?php

class Login extends MY_Controller {
	
	function index()
	{
    //$UID = $this->session->userdata('user_id');

		$data['page_title']   = 'تسجيل الدخول';
		$data['main_content']   = 'login_form';
		$this->load->view('includes/template', $data);		
	}
	
	function validate_credentials()
	{		
		$this->load->model('user_model');
		$query = $this->user_model->validate();
		
		if($query) // if the user's credentials validated...
    {
      $username = $this->input->post('username');

      $session_data = $this->user_model->get_session_data($username);


      //var_dump($session_data);

			$data = array(
				'username'      => $this->input->post('username'),
				'is_logged_in'  => true
			);
      $this->session->set_userdata($data);


      $this->session->set_userdata($session_data[0]);
//var_dump($this->session->userdata);
$alumni_id = $this->session->userdata('alumni_id');
$user_id = $this->session->userdata('user_id');
$role = $this->session->userdata('role');
      if($role == 'admin')
        redirect("admin/administrator");
      else
        redirect("alumni/show_alumni/$user_id");
		}
		else // incorrect username or password
		{
			$this->index();
      echo"<div class='warning'>Invalid username or password</div>";
		}
  }	

  function get_last_controler()
  {
    
  }
	
	function signup()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}
	


	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

}

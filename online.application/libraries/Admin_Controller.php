<?php
  class Admin_Controller extends MY_Controller{

    public $data = array();

      public function __construct(){
        parent::__construct();
        $this->data['meta_title'] = 'My Awsome CMS Admin';
        
        $this->load->helper('form');
        $this->load->library('form_validation');

$this->load->helper('file');
//write_file(APPPATH ."/test_files/test.txt", uri_string() .";\n", 'a');
      
        $exception_uris = array(
          'admin/user/login' 
          //'admin/user/logout' 
        );
        /*
        if(in_array(uri_string(), $exception_uris) == false)  {
          //if($this->user_m->loggedin() == false){
            redirect('admin/user/login');
          //}
        }*/
      }
  }
?>

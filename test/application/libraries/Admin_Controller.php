<?php
  class Admin_Controller extends MY_Controller{

    public $data = array();

      public function __construct(){
        parent::__construct();
        $this->data['meta_title'] = 'My Awsome CMS Admin';
        
        $this->load->helper('form');
        $this->load->library('form_validation');

        $faculties_list = $this->alumni_model->get_faculties();
        $ac_degrees = $this->alumni_model->get_academic_levels();
        $grades= $this->alumni_model->get_degrees();
        $this->data['grades'] = $grades;

        $this->data['ac_degrees'] = $ac_degrees;
        $this->data['faculties_list'] = $faculties_list;
       if(empty( $this->session->userdata('site_lang') )){
         $this->session->set_userdata('site_lang', $this->config->item('language'));
         echo"lang in session set to<b><u>"  .$this->config->item('language') , "</u></b> XXXXXXXXXXXXXXXX";
       }
        //var_dump($this->session->userdata ); 
//$this->load->helper('file');
//write_file(APPPATH ."/test_files/test.txt", uri_string() .";\n", 'a');
      
        
      }
  }
?>

<?php
  class MY_Controller extends CI_Controller{

    public $data = array();

      public function __construct(){
        parent::__construct();
        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
      $this->alumni_data_table      = $this->db->dbprefix(alumni_data_table);
      $this->alumni_main_table      = $this->db->dbprefix(alumni_main_table);
      $this->users_table            = $this->db->dbprefix(users_table);
      $this->faculties_table        = $this->db->dbprefix(faculties_table);
      $this->academic_degrees_table = $this->db->dbprefix(academic_degree_table);
      $this->degrees_table          = $this->db->dbprefix(degrees_table);

      $this->settings = $this->admin_model->get_settings();
      //var_dump($this->settings);
      }
  }
?>

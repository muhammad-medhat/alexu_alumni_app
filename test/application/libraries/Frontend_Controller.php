<?php
  class Frontend_Controller  extends MY_Controller{

    public $data = array();

      public function __construct(){
        parent::__construct();
        $this->alumni_data_table      = $this->db->dbprefix(alumni_data_table);
        $this->alumni_main_table      = $this->db->dbprefix(alumni_main_table);
        $this->users_table            = $this->db->dbprefix(users_table);
        $this->faculties_table        = $this->db->dbprefix(faculties_table);
        $this->academic_degrees_table = $this->db->dbprefix(academic_degree_table);
        $this->degrees_table          = $this->db->dbprefix(degrees_table);
        
        $years = $this->alumni_model->get_years();
        _db_debug();
        $faculties_list = $this->alumni_model->get_faculties();
        $ac_degrees = $this->alumni_model->get_academic_levels();
        $grades= $this->alumni_model->get_degrees();
        $this->data['grades'] = $grades;

        $this->data['ac_degrees'] = $ac_degrees;
        $this->data['faculties_list'] = $faculties_list;
        $this->data['years'] = $years;
        
      }
  }
?>

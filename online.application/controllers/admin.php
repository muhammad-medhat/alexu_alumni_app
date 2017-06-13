<?php

class Admin extends Admin_Controller {
  function __construct()
	{
    //$this->load->library('file');
		parent::__construct();
    //var_dump($this->session->userdata);
    if( $this->session->userdata('role') != 'admin'){

      redirect('login');
    } else {
      //die;
    }

  }

  function index(){

    
    //$data['main_content'] = 'alumni_admin';
    //$this->load->view('includes/template', $data);
    $this->administrator();
  }

  function upload_file()
  {
    $this->load->model('admin_model');
    $this->admin_model->do_upload();
    $upload_data = $this->upload->data();
    $file_name = $upload_data['file_name'];
    $this->display_file($file_name); 
  }

  function display_file($_file_name)
  {
     $file = APPPATH ."/uploads/$_file_name";
    //load the excel library
    $this->load->library('excel');
    //read file from path
    $objPHPExcel = PHPExcel_IOFactory::load($file);
    //get only the Cell Collection
    $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
    //extract to a PHP readable array format
    foreach ($cell_collection as $cell) {
        $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
        $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
        $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
        //header will/should be in row 1 only. of course this can be modified to suit your need.
        if ($row == 1) {
            $header[$row][$column] = $data_value;
        } else {
            $arr_data[$row][$column] = $data_value;
        }
    }

    header("Content-Type: text/html; charset=UTF-8");

    var_dump($arr_data);

  }

  function pagination($url, $num_rows, $limit, $offset)
  {
    $base_url = $url;
    $config = array();
    $config["base_url"]       = site_url($base_url);
    $config["total_rows"]     = $num_rows;
    $config["per_page"]       = $limit;
    $config["uri_segment"]    = $offset;
    //$config["uri_segment"]    = 4;

    $config['full_tag_open']  = "<div class='paging'>";
    $config['full_tag_close'] = "</div>";

    $config['first_link'] = 'اول صفحة';
    $config['last_link'] = 'اخر صفحة';
    $config['next_link'] = 'التالية~>';
    $config['prev_link'] = '<~السابقة';
    
    $this->pagination->initialize($config);
  }



  function administrator()
  {//$data['message'] = 'administrator function ';
      $limit = admin_limit;
      $offset = $this->uri->segment(3);
      $url_segment=3;

      $num_rows = $this->admin_model->get_num_alumni();
      $base_url = "admin/administrator";
      
      $this->pagination($base_url, $num_rows, $limit, $url_segment);




      $alumnies = $this->admin_model->get_all($limit, $offset);
      $data['alumnies'] = $alumnies;

      $data['page_title'] = 'صفحة ادارة الخريجين';
      if(count($alumnies) == 0)
        $data['main_content'] = 'admin_noalumnies';
      else
        $data['main_content'] = 'admin_view';
      $this->load->view('includes/template', $data);
  }

  function change_state($_alumni_id)
  {
    $this->admin_model->toggle_state($_alumni_id);
  }

}

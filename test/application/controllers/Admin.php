<?php
class Admin extends Admin_Controller {
  function __construct()
	{
		parent::__construct();
    if( $this->session->userdata('role') != 'admin'){
      redirect('login');
    } else {}

      $this->admin_view_folder = "includes/admin/template";
    $this->user_id = $this->session->userdata('user_id');
    
  }

  function index(){
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


  }

  function paginate($url, $num_rows, $limit, $offset)
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

  function edit($alumni_id){
    $alumni = $this->admin_model->get_alumni($alumni_id);
    $alumni_othet_data = $this->admin_model->get_alumni_data_other($alumni_id);
 
      $this->data['fac_field'] = $this->alumni_model->translate_field('arabic', $this->faculties_table, true); 
      $this->data['faculties_field'] = $this->alumni_model->translate_field('arabic', $this->faculties_table, true); 
      $this->data['grades_field'] = $this->alumni_model->translate_field('arabic', $this->academic_degrees_table, true);       
      $this->data['certificate_field'] = $this->alumni_model->translate_field('arabic', $this->academic_degrees_table, true); 
    $this->data['alumni'] =  $alumni;
    $this->data['alumni_data'] =  $alumni_othet_data;

    $this->data['page_title'] = "بيانات الخريج";
    $this->data['main_content'] = 'admin/single_alumni_view';
    $this->load->view('includes/admin/edit_temp', $this->data);  
  }

  function perform_edit($alumni_id){

    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

    $this->form_validation->set_rules('name', $this->lang->line('name'), 'required');
    $this->form_validation->set_rules('graduation_year', $this->lang->line('graduation_year') , "trim|required|is_numeric");
    //|regex_match[/$(\d{4})$/]
    if($this->form_validation->run()!=false){
      $exceptions = array('submit');
      $data_array = array();
      foreach ($this->input->post(null, true) as $p=>$v) {
        if(!in_array($p, $exceptions))
          $data_array[$p] = $v;
      }

      $this->admin_model->update_alumni($alumni_id, $data_array);
      redirect('admin');
      //$this->index();
    }else{
      $this->edit($alumni_id);
      //redirect("admin/edit/$alumni_id");
    }
    echo "??????????";
  }

  function administrator()
  {
    ############ access settings
      $limit = ($this->admin_model->get_settings_value('admin_limit') == '')? admin_limit: 
        $this->admin_model->get_settings_value('admin_limit');
      #######################
      ////echo "<h1>limit is $limit</h1>";
      $url_segment=3;
      $offset = $this->uri->segment($url_segment);

  
      $num_rows = $this->admin_model->get_num_alumni();
      $this->data['num_rows'] = $num_rows;
      $base_url = "admin/administrator";
      
      $this->paginate($base_url, $num_rows, $limit, $url_segment);
      $alumnies = $this->admin_model->get_all($limit, $offset);

      $this->data['alumnies'] = $alumnies;
      $this->data['page_title'] = 'صفحة ادارة الخريجين';

      if(count($alumnies) == 0)
        $this->data['main_content'] = 'admin_noalumnies';
      else
        $this->data['main_content'] = 'admin_view';
      $this->load->view($this->admin_view_folder, $this->data);
  }

  function change_state($_alumni_id)
  {
      $this->admin_model->toggle_state($_alumni_id);
      redirect('admin/administrator');
  }


  function _year_match($year){
    $this->form_validation->set_message('_yearmatch', 'The %s is already taken');
     return preg_match('/^[a-z0-9]+$/', $year );
  }
  function personal(){

    $this->data['user'] = $this->admin_model->get_alumni($this->user_id);
    $this->data['page_title'] = $this->lang->line('personal');
    $this->data['main_content'] = 'admin/personal';
    $this->load->view($this->admin_view_folder, $this->data);
  }
  function change_personal(){

    $user_id = $this->session->userdata('user_id');
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

    $this->form_validation->set_rules('name', $this->lang->line('name'), 'required');
    $this->form_validation->set_rules('username', $this->lang->line('username') , "trim|required|edit_unique[users.username.$user_id]");


    echo "<div class='query'>" .$this->db->last_query() ."</div>";
    $this->form_validation->set_rules('password', $this->lang->line('password'),      'required');
    $this->form_validation->set_rules('confirm', $this->lang->line('confirm'),  'required|matches[password]');
    $this->form_validation->set_rules('email', $this->lang->line('email'),    'required|valid_email');

    if($this->form_validation->run()){
      //$this->output->enable_profiler(true);
      $arr = array();
      $exceptions = array('submit', 'confirm');
      foreach($this->input->post(null, true) as $k=>$v){
        if(!in_array($k, $exceptions)){
          if($k == 'password')
            $arr[$k] = md5($v);
          else
            $arr[$k] = $v;
        }
      }
      $this->admin_model->update_personal($this->user_id, $arr);
     redirect('admin'); 
    } else{
      $this->personal();
    }
  }

  function settings(){
    $this->data['settings'] = $this->admin_model->get_settings();
    $this->data['page_title'] = $this->lang->line('settings');
    $this->data['main_content'] = 'admin/settings';
    $this->load->view($this->admin_view_folder, $this->data);
  }

  function change_settings(){
    $exceptions = array('submit');
    $arr = array();
    foreach($_POST as $p=>$v){
      if(!in_array($p, $exceptions))
        $arr[$p] = $v;
    }
    
    $this->admin_model->update_settings($arr);
    $this->session->set_flashdata('message', $this->lang->line('settings_updated'));
    // $this->index(); //this line cases an infinit loop in case of "this->settings()"
    redirect('admin/administrator');
    
  }

	public function edit_unique( $str='', $params)
	{
    $this->form_validation->set_message('edit_unique',
        'The %s is already being used by another account.');
    
    list($table, $field, $id) = explode(".", $params);

    $query = $this->db->select($field)->from($table)
        ->where($field, $str)->where('id !=', $id)->limit(1)->get();
    //$this->form_validation->set_message('edit_unique', $this->db->last_query() );

		return $query->num_rows() === 0;
  }

  ############## TOOLBAR FUNCTIONS #####################

  function delete(){
    if($_POST){
      $ids = json_decode($_POST['ids']);
      //just set the value of approved to -2

      $this->admin_model->delete($ids ,0);

    }
    else
      echo $this->lang->line('pleaseselectitems');


  }
  function unpublish(){
   if($_POST){
      $ids = json_decode($_POST['ids']);
      //print_r($ids);

      $this->admin_model->publish($ids ,0);

    }
    else
      echo $this->lang->line('pleaseselectitems');

  }

  function publish(){
    $p_dump = print_r($_POST, TRUE  );
    
    //write_file(APPPATH ."/uploads/request.log", '=====================POST' .$p_dump, 'a');
    if($_POST){
      $ids = json_decode($_POST['ids']);
      //print_r($ids);

      $this->admin_model->publish($ids ,1);
   }
    else
      echo $this->lang->line('pleaseselectitems');
  }


}

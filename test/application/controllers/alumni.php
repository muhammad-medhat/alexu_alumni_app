<?php

class Alumni extends Frontend_Controller 
{
	function __construct()
	{
		parent::__construct();


    header('Content-Type: text/html; charset=utf-8');
      $this->uploads_folder = realpath(APPPATH .'uploads');
      $this->file = $this->uploads_folder .'/qa.sql';
      $this->load->helper('file');      
  }

  function index($lang='')
  {
    $this->all();

  //  echo "<div class='query'>" .$this->db->last_query() ."</div>";
  }

  function all()
  {

      $num_rows = $this->alumni_model->get_num_search();
    //display all alumnies for the university
      //$limit = general_limit;
      $limit = ($this->alumni_model->get_settings_value('limit') == '')? general_limit: 
        $this->alumni_model->get_settings_value('limit');
    
    $offset = $this->uri->segment(3);
    $url_segment=3;

    ############################
    if($num_rows>$limit){
      
      $this->load->library('pagination');
      $base_url = 'alumni/all';
      $url_segment=3;

      //$this->pagination->initialize($config);
    $this->pagination($base_url, $num_rows, $limit, $url_segment);


      $this->data['pagination'] = $this->pagination->create_links();
      $offset = $this->uri->segment(3);
    } 
    else{
      $this->data['pagination'] = '';
      $offset = 0;
    }
    ################################
    $this->data['num_rows'] = $num_rows;
    $alumni_list = $this->alumni_model->get_all($limit, $offset);    
//    echo "<div class='query' style='background-color:red'>" .$this->db->last_query() .'</div>';
    $this->data['alumni_list'] = $alumni_list;
    
    $this->data['page_title'] = $this->lang->line('alumni');
    $this->data['main_content'] = 'alumni_view';
    $this->load->view('includes/template', $this->data);

  }

  function search()
  {
    $alumni_id = $this->input->post('alumni_id');
    $name      = $this->input->post('name');
    $year      = $this->input->post('year');
    $year_r    = $this->input->post('year-r');
    $faculties = $this->input->post('faculties');
    $ac_deg    = $this->input->post('ac_deg');

    //setting session var total_all_fac = 0 reptesents number of all items
    $this->session->set_userdata('total_all_fac', '');

    if(!$alumni_id)
    {/*
      if($this->session->userdata('total_all_fac') == ''){
        $num_rows = $this->alumni_model->get_num_search($faculties, $year, $ac_deg, $name, $year_r);
      } 
      else {
        $num_rows = $this->session->userdata('total_all_fac');
      }*/
        $num_rows = $this->alumni_model->get_num_search($faculties, $year, $ac_deg, $name, $year_r);

    }
    else 
      $num_rows = $this->alumni_model->alumni_exist($alumni_id);

    _db_debug();
        $this->session->set_userdata('total_all_fac', $num_rows);
    $query_array = array(
      'alumni_id' => $alumni_id,
      'name'      => $name, 
      'year'      => $year, 
      'year-r'    => $year_r, 
      'faculties' => $faculties, 
      'ac_deg'    => $ac_deg 
    );

    $query_id = $this->input->save_query($query_array);
		redirect("alumni/display/$query_id");
  }

  function display($query_id = 0, $offset = 0)
  {
    $alumni_list = array();
    $limit=general_limit;
    $offset = $this->uri->segment(4);
    $url_segment=4;
    $this->input->load_query($query_id);
    $query_array = array(
      'alumni_id' => $this->input->get('alumni_id'), 
      'name'      => $this->input->get('name'), 
      'year'      => $this->input->get('year'), 
      'year-r'    => $this->input->get('year-r'), 
      'faculties' => $this->input->get('faculties'), 
      'ac_deg'    => $this->input->get('ac_deg') 
    );
    $alumni_id  = $query_array['alumni_id'];
    $name       = $query_array['name'];
    $year       = $query_array['year'];
    $year_r     = $query_array['year-r'];
    $faculties  = $query_array['faculties'];
    $ac_deg     = $query_array['ac_deg'];

    $num_rows = $this->session->userdata('total_all_fac');

    if(!empty($alumni_id)){
        $alumni_list = $this->alumni_model->get_alumni($alumni_id);
_db_debug();
//echo "<div class='query'>" .$this->db->last_query() ."</div>";
        $this->data['pagination'] = ''; 
        $this->data['num_rows'] = $num_rows;
    } else {
      //if($num_rows>$limit){
      
        $this->load->library('pagination');
        $base_url = "alumni/display/$query_id";;
        
        $this->pagination($base_url, $num_rows, $limit, $url_segment);

          $alumni_list = $this->alumni_model->get_all($limit, $offset, $faculties, $year, $ac_deg, $name, $year_r);
        _db_debug();
      $this->data['pagination'] = $this->pagination->create_links();
      $this->data['num_rows'] = $num_rows;
    $base_url = "alumni/display/$query_id";
    //$this->pagination($base_url, $num_rows, $limit, $url_segment);
    }

    $this->data['alumni_list'] = $alumni_list; 
    $thiw->data['page_title'] = $this->lang->line('alumni');
    $this->data['main_content'] = 'alumni_view';
    $this->load->view('includes/template', $this->data);
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

    $config['full_tag_open']  = "<div class='paging'>";
    $config['full_tag_close'] = "</div>";

    $config['first_link'] = $this->lang->line('first_link');
    $config['last_link']  = $this->lang->line('last_link');
    $config['next_link']  = $this->lang->line('next_link');
    $config['prev_link']  = $this->lang->line('prev_link');
    
    $this->pagination->initialize($config);
  }

  function show_alumni($_id)
  {
    $alumni = $this->alumni_model->get_alumni($_id);
    $alumni_data = $this->alumni_model->get_alumni_data($_id);

    $data['alumni'] =  $alumni;

    $data['alumni_data'] = $alumni_data;
    $data['page_title'] = $this->lang->line('alumni_data');
    $data['main_content'] = !is_null($alumni)? 'single_alumni_view': 'not_found';;
    $this->load->view('includes/template', $data);
  }

  function add_alumni()
  {
    $this->data['main_content'] = 'alumni_signup';
    $this->data['page_title'] = $this->lang->line('registration');
    $this->load->view('includes/template', $this->data);
  }

  function register()
  {
      $this->load->library('form_validation');
		$this->form_validation->set_rules('name', $this->lang->line('name'),              'required');
    $this->form_validation->set_rules('graduation_year',$this->lang->line('year'),    'trim|required');
    $this->form_validation->set_rules('username', $this->lang->line('username'),      'required|is_unique[users.username]');
    $this->form_validation->set_rules('password', $this->lang->line('password'),      'required');
    $this->form_validation->set_rules('retype', $this->lang->line('retype'),          'required|matches[password]');
    $this->form_validation->set_rules('email', $this->lang->line('email'),            'required|valid_email');
			
    if ($this->form_validation->run() != FALSE)
		{
      $fname = $this->alumni_model->get_faculty_name($this->input->post('fid'));
      $ac_deg_name = $this->alumni_model->get_ac_degree_name($this->input->post('certificate_type_id'));
      $deg_name = $this->alumni_model->get_degree_name($this->input->post('gid'));
      $ids_arr = array(
        'fid'=>$fname, 
        'gid'=>$deg_name, 
        'certificate_type_id'=>$ac_deg_name
      ); 

      $exceptions = array('password', 'retype', 'submit');
      $registered_user_data = array();
      foreach ($this->input->post(null, true) as $p=>$v) {
        $registered_user_data[$p]=$v;
      }
      $this->alumni_model->alumni_registration($registered_user_data);

      $filtered_user_data = _remove_items($exceptions, $registered_user_data);
      $registered = array_replace($filtered_user_data, $ids_arr);

      /*$view_arr contains the translation for fields*/
      $view_arr = array();
      foreach ($registered as $key=>$value) {
        $view_arr[$this->lang->line($key)] = $value;
      }

      $alumni_id = $this->session->userdata('registered_alumni_id');
      $data['registered_user_data'] = $registered;
      $view_arr = array_merge(array('alumni_id'=>$alumni_id), $view_arr);

      $this->session->set_userdata('registered_user_data', $view_arr);
      $data['alumni_id'] = $alumni_id;
      $data['page_title'] = $this->lang->line('registration');
      redirect('alumni/complete');
    } else{
      $this->add_alumni(); 
    }
  }
  
  function complete(){
  
      $data['main_content'] = 'signup/complete';
      $this->load->view('includes/template', $data);
  }

  function edit()
  {
    $alumni_id = $this->session->userdata('user_id');
    $alumni_personal_data = $this->alumni_model->get_alumni_data($alumni_id);
    $data['alumni_personal_data'] = $alumni_personal_data;

    $data['main_content'] = 'alumni_edit_view';
    $data['page_title'] = $this->lang->line('edit_data');
    $this->load->view('includes/template', $data);
  }

  function update()
  {
    
    $alumni_id = $this->session->userdata('user_id');
    $this->alumni_model->update_alumni($alumni_id, $this->input->post(null, true) );
    $alumni = $this->alumni_model->get_alumni($alumni_id);
    $data['alumni'] = $alumni;

      $data['main_content'] = 'messages/success_edit';
      $data['page_title'] = 'شكرا للتعديل';
      $this->load->view('includes/template', $data);


  }

  function upload_cert($file_name)
  {
    /*
    $this->load->helper('file');
    $file = "application" .DIRECTORY_SEPARATOR .'uploads' .DIRECTORY_SEPARATOR .'file.txt';
    $data = 'adfsadsfasdf';
    write_file($file, $data);
     */

    $this->alumni_model->do_upload($file_name);

    $name = $_FILES['certeficate']['name'];
    $ext = end((explode(".", $name)));

    $this->alumni_model->update_cert($file_name ,$ext);

    $data['main_content'] = 'signup/success';
    $data['page_title'] = 'تم التسجيل';
    $this->load->view('includes/template', $data);

/*
    $this->admin_model->do_upload();
    $upload_data = $this->upload->data();
    $file_name = $upload_data['file_name'];
    $this->display_file($file_name); 
   */
  }
  function _debug(){
        $debug_query = 'insert into lk9v6_debug(query) values (\'' .$this->db->last_query() .'\')';
        $this->db->query($debug_query);

  }
}

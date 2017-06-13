<?php

class My_admin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
    header('Content-Type: text/html; charset=utf-8');
  }

  function index()
  {
    $faculties = $this->alumni_model->get_faculties_ddl();
    //var_dump($faculties);
    $data['faculties'] = $faculties;

    $data['main_content'] = 'me/myadmin_upload';
    $this->load->view('me/includes/template', $data);
  }

 
  function collect_data()
  {
    $data_arr = array(
      'fid' => $this->input->post('faculty'),
      'year' => $this->input->post('year'),
      'name_ar_pos'     => $this->input->post('name_ar_pos'),
      'name_en_pos'     => $this->input->post('name_en_pos'),
      'gid_pos'         => $this->input->post('gid_pos'),
      'department_pos'  => $this->input->post('department_pos'),
      'division_pos'    => $this->input->post('division_pos'),
      'email_pos'       => $this->input->post('email_pos'),
      'bdate_pos'       => $this->input->post('bdate_pos'),
      'nationalnum_pos' => $this->input->post('nationalnum_pos'),
      'job_pos'         => $this->input->post('job_pos'    ),
      'address_pos'     => $this->input->post('address_pos'),
      'city_pos'        => $this->input->post('ciry_pos'   ),
      'country_pos'     => $this->input->post('country_pos'),
      'phone_pos'       => $this->input->post('phone_pos'  ),
      'mobile_pos'      => $this->input->post('mobile_pos'  ),
      'honor_pos'  => $this->input->post('honor_pos'  ),
      'cert_type_pos'  => $this->input->post('cert_type_pos' )

    );
    return $data_arr;
  }
  ####################################################################
  function upload_file()
  {
    //$header_row  = $this->input->post('header_row');
    $this->load->model('my_admin_model');
    $this->my_admin_model->do_upload();
    $upload_data = $this->upload->data();
    $file_name = $upload_data['file_name'];
    $this->display_file($file_name); 
  }

  function display_file($inputFileName)
  {
    $pos_arr = $this->collect_data();
    //var_dump($pos_arr);
    $fid = $this->input->post('faculty');
    $year = $this->input->post('year');
    $alumni_list = array();
    //  Read your Excel workbook
    try {
      $inputFileName = APPPATH ."uploads/$inputFileName";
      $this->load->library('excel');
      $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
      $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0); 
    $highestRow = $sheet->getHighestRow(); 
    $highestColumn = $sheet->getHighestColumn();
    //  Loop through each row of the worksheet in turn
    $rows = array();
    for ($row = 1; $row <= $highestRow; $row++){ 
        //  Read a row of data into an array
      
      $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                        NULL,
                                        TRUE,
                                        FALSE);
        //  Insert row data array into your database of choice here
        if($row == 1)
          $header_row = $rowData;
        else{
            $rows[] = $rowData;
            $alumni = array();
            foreach ($rowData[0] as $key=>$value) {
              switch ($key) 
              {
                //case the year will be taken from file
                  case $pos_arr['year']             : $alumni['year']        =  $value; break;
                  case $pos_arr['name_ar_pos'     ] : $alumni['name']        =  $value; break;              
                  case $pos_arr['name_en_pos'     ] : $alumni['name_en']     =  $value; break;              
                  case $pos_arr['gid_pos'         ] : $alumni['gid']         =  $value; break;              
                  case $pos_arr['department_pos'  ] : $alumni['department']  =  $value; break;
                  case $pos_arr['division_pos'    ] : $alumni['division']    =  $value; break;
                  case $pos_arr['email_pos'       ] : $alumni['email'  ]     =  $value; break;
                  case $pos_arr['bdate_pos'       ] : $alumni['bdate'  ]     =  $value; break;
                  case $pos_arr['nationalnum_pos' ] : $alumni['nationalnum'] =  $value; break;
                  case $pos_arr['job_pos'         ] : $alumni['job'    ]     =  $value; break;
                  case $pos_arr['address_pos'     ] : $alumni['address']     =  $value; break;
                  case $pos_arr['city_pos'        ] : $alumni['city'   ]     =  $value; break;
                  case $pos_arr['country_pos'     ] : $alumni['country']     =  $value; break;
                  case $pos_arr['phone_pos'       ] : $alumni['phone'  ]     =  $value; break;
                  case $pos_arr['honor_pos'       ] : $alumni['honor'  ]     =  $value; break;
                  case $pos_arr['mobile_pos'      ] : $alumni['mobile' ]     =  $value; break;
                  case $pos_arr['cert_type_pos'   ] : $alumni['cert_type']   =  $value; break;
                  default:         break;
                }
          }
          $alumni['fid'] = $fid;
          if($this->input->post('one_year') == true)
            $alumni['year'] = $year;


                $alumni_list[] = $alumni;
        }
    }
    
    $insert = $this->input->post('insert');

    if($insert=='on'){
      foreach ($alumni_list as $al) {
        $this->my_admin_model->insert_alumni($al);
        //echo "<tr class='query'><td colspan=11>" .$this->db->last_query() ."</td></tr>";
          //var_dump($s);
      }
    }
    $data['staff_list'] = $alumni_list;
    $data['main_content'] = 'me/index2';
    $data['rows'] = $rows;
    $data['header_row'] = $header_row;
    $this->load->view('me/includes/template', $data);
  }
  
  function display_file_contents($arr_data)
  {
      foreach ($arr_data as $key=>$value) {
        var_dump( $value);
        echo'<br>==============';
        foreach ($value as $k1=>$v1) {
          var_dump($v1);
        }
      }
  }
  /*
   */
}

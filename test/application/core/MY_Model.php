<?php
  class MY_Model extends CI_Model{

    protected $_table_name = '';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = '';
    public $rules = array();
    protected $_timestamp = false;

      public function __construct(){
        parent::__construct();

        $this->alumni_data_table        = $this->db->dbprefix(alumni_data_table);
        $this->alumni_main_table        = $this->db->dbprefix(alumni_main_table);
        $this->alumni_data_other_table  = $this->db->dbprefix(alumni_data_other_table);
        $this->users_table              = $this->db->dbprefix(users_table);
        $this->faculties_table          = $this->db->dbprefix(faculties_table);
        $this->academic_degrees_table   = $this->db->dbprefix(academic_degree_table);
        $this->degrees_table            = $this->db->dbprefix(degrees_table);

        $this->settings_table           = $this->db->dbprefix(settings_table);   
      }

    public function get($id=null, $single=false){
      if($id != null)  {
        //we need a single record
        $filter = $this->_primary_filter;
        $id=$filter($id);
        $this->db->where($this->_primary_key, $id);
        $method = 'row';
      } 
      elseif($single==true){
        $method='row';
      }else {
        $method = 'result';
      }

      if(!count($this->_order_by)){
        $this->db->order_by($this->_order_by);
      }
      $return = $this->db->get($this->_table_name)->$method();
      return $return;
    }

    public function get_by($where, $single=false){
      $this->db->where($where); 
      $user = $this->db->get($this->_table_name, $single);
      return $user;
    }

    public function save($data, $id=null){

      if($this->_timestamp == true){
        $now = date('Y-m-d H:i:s');
        $id || $data['created'] = $now;
        $data['modified'] = $now;
      }

      if($id===null){
        //insert 
        !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = null;
        $this->db->insert($this->_table_name, $data);
        $id = $this->db->insert_id();
      } else{


        //update
        $filter = $this->_primary_filter;
        //??bug gets a value of id=0, intvar(id) always becoms 0
        //$id = $filter($data[$this->_primary_key]);
        

        $this->db->set($data);
        $this->db->where($this->_primary_key, $id);
        $this->db->update($this->_table_name);

      } echo $this->db->last_query();

      return $id;
    }

    public function delete($id){
      
      $filter = $this->_primary_filter;
      $id = $filter($id);
      //echo "<p>id = $id</p><p> filter is $filter</p>";

      if(!$id){
        return false;
      }
      $this->db->where($this->_primary_key, $id);
      $this->db->limit(1);
      $this->db->delete($this->_table_name);
    }
    function array_from_post($fields){
      
      $data = array();
      foreach($fields as $field){
        $data[$field] = $this->input->post($field);
      }
      return $data;
    }
  function translate_field($_field_name, $_table_name, $only_name=false){
      $lang = $this->session->userdata('site_lang');
      $field = $lang;
      if(!$lang){
        $field = $this->config->item('language');
      } else{
        if($lang == 'english'){
          if(!$this->_is_column_exist($lang, $_table_name))
           $field = 'name';
        }
      }
      if(!$only_name)
        return "$field as $_field_name";
      else
        return $field;
  }
  function _is_column_exist($column_name, $table_name){
    $q = "select * from information_schema.columns where
      table_schema ='" .$this->db->database ."' and table_name = '$table_name' and column_name = '$column_name'";
      $query = $this->db->query($q);
      return ($query->num_rows() ==1);
        
  }
    
  }
?>

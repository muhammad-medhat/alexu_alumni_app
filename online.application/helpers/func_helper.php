 <?php


  function _db_debug($string=''){
    $ci =& get_instance();
        $debug_query = 'insert into temp_debug(query) values ("'.$string .$ci->db->last_query() .'")';
        $ci->db->query($debug_query);
//echo $ci->db->last_query();
  }
  function _remove_items($items, $source){
    foreach ($items as $i) {
      if(isset($source[$i]))
        unset($source[$i]);
    }
    return $source;
  }



function simple_array($array, $field_name='name'){
  $ret = array();
  foreach ($array as $key) {
    $ret[$key->id] = $key->$field_name; 
  }
  return $ret;
}

 
 ?>

<style type="text/css" media="all">
  thead{
    border-bottom:solid 1px;
font-weight:bold;
  }
.staff_list_table{
  border-collapse:collapse;
}
.staff_list_table td{
  padding:5px;
}
#number, .num{
  border: 1px solid;
margin: 1em;
font-weight: bold;
background-color: #fff;
width: 200px;
}
</style>





<div id='number'>Number of records in excel:  <?php echo count($rows)?></div>
<div class='num'>alumni count:  <?php echo count($staff_list)?></div>

<table id='staff_list_table'>
  <thead>
    <?php foreach ($header_row[0] as $key=>$value) {?>
        <td><?php echo "[$key]" .$value ?></td>
    <?php } ?>
  </thead>
    <?php $i=0;?>
  <?php foreach ($rows as $row_key=>$row_value) {
            $class = ($i%2 == 0)? 'even':'odd';
            $values_number = 0;
            $tr = "<tr class='$class'>";
    
            foreach ($row_value[0] as $key=>$value) {
              if( isset($value) ) $values_number ++;
                $tr .= "<td>[$key] $value</td>";
            }
            $tr .= "</tr>";
            if($values_number > 0) {
              echo $tr;
            }
            $i++;
          } 
?>
</table>

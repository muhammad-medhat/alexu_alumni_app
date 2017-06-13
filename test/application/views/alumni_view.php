<style type="text/css" >
table{
border-collapse:collapse;
}
table thead tr td{  padding: 8px 45px;}
  table td{
    vertical-align:top;
padding: 2px
  }

.even{background-color: #e6f3f8;}  
.odd{background-color: #e1e1e1;}  

</style>

<div id='all'>
<?php
//var_dump($alumni_list);
$this->load->view('helpers/alumni_search_view');
?>
<div id='info'>
    <?php if(isset($num_rows)){
      echo $this->lang->line('alumni_result') ." $num_rows";  
    } else {
      //echo $this->lang->line('no_result') ;
    }
    ?>
</div>

    <table class="sortable" border='1' style='text-align:center;font-weight:bold' >


      <thead>
       <tr>
          <td><?= $this->lang->line('name')?></td>
          <td><?= $this->lang->line('graduation_year')?></td>
          <td><?= $this->lang->line('faculty')?></td>
          <td><?= $this->lang->line('scientific_degree')?></td>
       </tr>
      <thead>
       <tbody>
<?php 
    switch(true) {
      case ( count($alumni_list) == 1 ): // single alumni
         $this->load->view('alumni_view_files/single', $alumni_list);
         break;
      case ( count($alumni_list)>1 ):
        $this->load->view('alumni_view_files/results', $alumni_list);
        break;
      default:
          echo "<tr>";
          echo "<td><h1>";
          $this->lang->line('no_result');
          echo "</h1></td>";
          echo "</tr>";
       }


?>
      </tbody>
    </table>
</div> <?php //end div class='all'?>

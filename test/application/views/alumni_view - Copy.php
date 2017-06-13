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
<?php if(count($alumni_list)>1) { ?>

      <thead>
       <tr>
          <td><?= $this->lang->line('name')?></td>
          <td><?= $this->lang->line('graduation_year')?></td>
          <td><?= $this->lang->line('faculty')?></td>
          <td><?= $this->lang->line('scientific_degree')?></td>
       </tr>
      <thead>






       <tbody>
        <?php $i = 0?>

          <tr>
            <td colspan='4'>   <?= $pagination ;?>      </td>
          </tr>
        <?php foreach ($alumni_list as $single_alumni) { ?>
          <?php $class = ($i%2 == 0)?'even':'odd'?>
        <tr class="<?= $class ?>">
            <td><?= anchor("alumni/show_alumni/$single_alumni->alumni_id", $single_alumni->name) ?></td>
            <td><?= ($single_alumni->graduation_year=='')?$this->lang->line('na'): $single_alumni->graduation_year	?></td>
            <td><?= $single_alumni->faculty ?></td>
            <td><?= $single_alumni->scientific_degree ?></td>          
        </tr>
        <?php $i++; }//end foreach ?>

          <tr>
            <td colspan='4'>
               <?php echo $pagination ;?>
            </td>
          </tr>
<?php } else { ?>
<?php         if(count($alumni_list) == 1){ // single alumni?>
<?php $single_alumni = $alumni_list?>
          <tr>
            <td><?= anchor("alumni/show_alumni/$single_alumni->alumni_id", $single_alumni->name) ?></td>
            <td><?= ($single_alumni->graduation_year=='')?$this->lang->line('na'): $single_alumni->graduation_year	?></td>
            <td><?= $single_alumni->faculty ?></td>
            <td><?= $single_alumni->scientific_degree ?></td>
          </tr>

<?php         }                                  ?>
<?php         }}else{                                  ?>
  <tr>
    <td><h1><?= $this->lang->line('no_result')?></h1></td>
  </tr>
<?php }?>
      </tbody>
    </table>
</div> <?php //end div class='all'?>

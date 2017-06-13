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


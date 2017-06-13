<?php $single_alumni = $alumni_list?>
          <tr>
            <td><?= anchor("alumni/show_alumni/$single_alumni->alumni_id", $single_alumni->name) ?></td>
            <td><?= ($single_alumni->graduation_year=='')?$this->lang->line('na'): $single_alumni->graduation_year	?></td>
            <td><?= $single_alumni->faculty ?></td>
            <td><?= $single_alumni->scientific_degree ?></td>
          </tr>


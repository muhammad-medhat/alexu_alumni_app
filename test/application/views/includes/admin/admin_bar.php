<?php $base_url = base_url(); //var_dump($alumni);?>
<table>
  <tr>
    <td><?=anchor('admin',                          "<img src='$base_url" ."images/admin/home.png' />") ?></td>
    <td><?=anchor("admin/delete/$alumni->alumni_id",        "<img src='$base_url" ."images/admin/trash.png' />")?></td>
    <td><?=anchor("admin/change_state/$alumni->alumni_id",  "<img src='$base_url" ."images/admin/pubx.png' />")?></td>
    <td><?=anchor("admin/change_state/$alumni->alumni_id",  "<img src='$base_url" ."images/admin/pub.png' />")?></td>
  </tr>
</table>

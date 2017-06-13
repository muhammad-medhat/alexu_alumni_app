<?php $base_url = base_url()?>
<table>
  <tr>
    <td><?=anchor('admin',          "<img src='$base_url" ."images/admin/home.png' />") ?></td>
    <td><?=anchor("admin/personal", "<img src='$base_url" ."images/admin/p.png' />")?></td>
    <td><?=anchor("admin/settings", "<img src='$base_url" ."images/admin/settings-24.png' />")?></td>
    <td><?=anchor("login/logout",   "<img src='$base_url" ."images/admin/logout.png' />")?></td>
  </tr>
</table>

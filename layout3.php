<h2>Overview</h2>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Overview</th>
      <th>Total</th>
      <th>Anchor</th>
    </tr>
  </thead>
  <tr>
    <td>Total Plugins</td>
    <td><?php echo count($plugins); ?></td>
    <td><a href="#plugins">Link</a></td>
  </tr>
  <tr>
    <td>Total Themes</td>
    <td><?php echo count($theme_directories); ?></td>
    <td><a href="#theme">Link</a></td>
  </tr>
  <tr>
    <td>Total DB size</td>
    <td><?php echo $dbSize['size']; ?>&nbsp;<?php echo $dbSize['type']; ?></td>
    <td><a href="#plugins">Link</a></td>
  </tr>
  <tfoot>
    <tr>
      <td>Overview</td>
      <td>Total</td>
      <td>Anchor</td>
    </tr>
  </tfoot>
</table>

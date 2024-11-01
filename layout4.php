<h2>Database</h2>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Database Name</th>
      <th>Size</th>
      <th>No. rows</th>
      <th>Next auto increment</th>
    </tr>
  </thead>
  <?php


  foreach ($mytables as $mytable) {
    $data_length = $mytable->Data_length;
    //echo "data " . $data_length . "<br />";
    $index_length = $mytable->Index_length;
    //echo "index: " . $index_length . "<br />";
    $data_size = ($data_length + $index_length) / 1024 / 1024; ?>
      <tr>
        <td><?php echo $mytable->Name; ?></td>
        <td><?php echo round($data_size, 2) . " (MB)"; ?></td>
        <td><?php echo $mytable->Rows; ?></td>
        <td><?php echo $mytable->Auto_increment; ?></td>
      </tr>
  <?php

  }
  ?>
  <tfoot>
    <tr>
      <td>Database Name</td>
      <td>size</td>
      <td>No. rows</td>
      <td>Next auto increment</td>
    </tr>
  </tfoot>
</table>

<h2>PHP Info</h2>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Value</th>
    </tr>
  </thead>
  <tr>
    <td>Memory Limit</td>
    <td><?php echo ini_get('memory_limit'); ?></td>
  </tr>
  <tr>
    <td>Post Max Size</td>
    <td><?php echo ini_get('post_max_size'); ?></td>
  </tr>
  <tr>
    <td>Upload Max File Size</td>
    <td><?php echo ini_get("upload_max_filesize"); ?></td>
  </tr>
  <tr>
    <td>Time Limit</td>
    <td><?php echo ini_get('max_execution_time'); ?></td>
  </tr>
  <tr>
    <td>Max Input Vars</td>
    <td><?php echo ini_get('max_input_vars'); ?></td>
  </tr>
  <tr>
    <td>Display Error</td>
    <td><?php if(strlen(ini_get('display_errors')) > 0) { echo ini_get('display_errors'); } else {echo '0';}; ?></td>
  </tr>
  <tfoot>
    <tr>
      <td>Name</td>
      <td>Value</td>
    </tr>
  </tfoot>
</table>

<?php  /*
echo ini_get('post_max_size') . "<br />";  //post max size
echo ini_get("upload_max_filesize") . "<br />";  //max upload size
echo ini_get('memory_limit') . "<br />";  //memory limit
echo var_dump(ini_get('display_errors')) . "<br />";  //errors
echo ini_get('max_input_vars') . "<br />";  //max input vars
echo ini_get('max_execution_time') . "<br />";   //max ex time  */
 ?>

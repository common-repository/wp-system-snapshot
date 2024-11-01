<h2>Database Info</h2>
<?php global $wpdb; ?>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Value</th>
    </tr>
  </thead>
  <tr>
    <td>Database Hostname</td>
    <td><?php echo $wpdb->dbhost; ?></td>
  </tr>
  <tr>
    <td>Database Username</td>
    <td><?php echo $wpdb->dbuser; ?></td>
  </tr>
  <tr>
    <td>Database Name</td>
    <td><?php echo $wpdb->dbname; ?></td>
  </tr>
  <tr>
    <td>Database Charset</td>
    <td><?php echo $wpdb->charset; ?></td>
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

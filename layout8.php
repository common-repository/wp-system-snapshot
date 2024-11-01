<h2>Wordpress Environment</h2>
<?php global $wpdb; ?>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Value</th>
    </tr>
  </thead>
  <tr>
    <td>Home Url</td>
    <td><?php echo get_home_url(); ?></td>
  </tr>
  <tr>
    <td>Site Url</td>
    <td><?php echo site_url(); ?></td>
  </tr>
  <tr>
    <td>Wordpress Version</td>
    <td><?php echo $zversion; ?></td>
  </tr>
  <tr>
    <td>Wordpress Muti-Site</td>
    <td><?php if (strlen(is_multisite()) > 0){echo "This is a mutisite";}else{echo "This is not a mutisite";} ?></td>
  </tr>
  <tr>
    <td>dedug Mode</td>
    <td><?php if(strlen(ini_get('display_errors')) > 0) { echo "Debug mode is on"; } else {echo 'Debug mode is either off or we have no errors';} ?></td>
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

<h2>Server Config</h2>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Version</th>
    </tr>
  </thead>
  <tr>
    <td><?php echo "Opertaing System"; ?></td>
    <td><?php echo php_uname( 's' ); ?></td>
  </tr>
  <tr>
    <td><?php echo "PHP Version"; ?></td>
    <td><?php echo $zversion; ?></td>
  </tr>
  <tr>
    <td><?php echo "MYSQL Version"; ?></td>
    <td><?php echo $mysqlVersion; ?></td>
  </tr>
  <tr>
    <td><?php echo "Server Software"; ?></td>
    <td><?php echo $_SERVER["SERVER_SOFTWARE"]; ?></td>
  </tr>
  <tr>
    <td><?php echo "Server IP"; ?></td>
    <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
  </tr>
  <tr><?php $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ); ?>
    <td><?php echo "Server Hostname"; ?></td>
    <td><?php echo mysqli_get_server_info( $connection ); ?></td>
  </tr>
  <tr>
    <td><?php echo "Server Protocol"; ?></td>
    <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
  </tr>
  <tr>
    <td><?php echo "Server Web Port"; ?></td>
    <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
  </tr>
  <tr>
    <td><?php echo "System Uptime"; ?></td>
    <?php $uptime = exec( "uptime", $system );
			if ( ! empty( $uptime ) ) { ?>
				<td><?php echo $uptime; ?></td> <?php }else{ ?>
    <td><?php echo "No uptime"; ?></td> <?php } ?>
  </tr>
  <tfoot>
    <tr>
      <td>Name</td>
      <td>Version</td>
    </tr>
  </tfoot>
</table>

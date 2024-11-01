<?php
/*
Plugin Name: WP System Snapshot
Plugin URI: https://www.escit.co.uk/web-design/
Description: The perfect tool for developers to see a quick snapshot of the WordPress system.
Version: 1.2
Author: ESC IT
Author URI: https://www.escit.co.uk
Text Domain: wp-system-snapshot
*/

function wp_system_snapshot___menu() {
  // register top-level menu page
  add_management_page(
    'WordPress System Snapshot',
    'System Snapshot',
    'manage_options',
    'wp_system_snapshot___page',
    'wp_system_snapshot___display_dashboard'
  );
}
add_action('admin_menu', 'wp_system_snapshot___menu');

function wp_system_snapshot___plugin_action_links( $links ) {

http://lewisjones-co-uk.stackstaging.com/wp-admin/tools.php?page=wp_system_snapshot_options
	$links = array_merge( array(
		'<a href="' . esc_url( admin_url( 'tools.php?page=wp_system_snapshot___page' ) ) . '">' . __( 'Run Snapshot', 'textdomain' ) . '</a>'
	), $links );

	return $links;

}
add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wp_system_snapshot___plugin_action_links' );

function wp_system_snapshot___themes_list() {
  $current_theme = wp_get_theme();
  $theme_directories = search_theme_directories(); // get list of themes

  $var___themes___count = count($theme_directories);
  $var___themes___active_count = 0;

  foreach($theme_directories as $key => $item) {
    $zdata = wp_get_theme($key);
    if($zdata == $current_theme) {
      $theme_directories[$key]['wp_get_theme']['ZActive'] = "<img src='images/Green-tick.png' style='height:20px; width:20px;'/> Active";
    } else {
      $theme_directories[$key]['wp_get_theme']['ZActive'] = "<img src='images/Red-cross.png' style='height:20px; width:20px;'/> Not Active";
    }
    $theme_directories[$key]['wp_get_theme']['Name'] = $zdata->get('Name');
    $theme_directories[$key]['wp_get_theme']['ThemeURI'] = $zdata->get('ThemeURI');
    $theme_directories[$key]['wp_get_theme']['Description'] = $zdata->get('Description');
    $theme_directories[$key]['wp_get_theme']['Author'] = $zdata->get('Author');
    $theme_directories[$key]['wp_get_theme']['AuthorURI'] = $zdata->get('AuthorURI');
    $theme_directories[$key]['wp_get_theme']['Version'] = $zdata->get('Version');
    $theme_directories[$key]['wp_get_theme']['Template'] = $zdata->get('Template');
  }
  // echo '<pre>';
  // var_dump($theme_directories);
  // echo '</pre>';
  return $theme_directories;
}

function wp_system_snapshot___plugins_list() {
  $plugins = get_plugins();
  $var___plugins___count = count($plugins);
  global   $var___plugins___active_count;
  $var___plugins___active_count = 0;


  $plugin_updates = get_site_transient( 'update_plugins' );

  // echo "<pre>";
  // var_dump($plugin_updates);
  // echo "</pre>";

  foreach($plugin_updates as $key => $item) {
    if($key == 'response') {
      foreach($item as $key1 => $item1) { // loop round each plugin that needs an update
        // echo $key1; // SAMPLE DATA: duplicate-post/duplicate-post.php
        // echo $item1->new_version; // SAMPLE DATA: 3.2.4
        // echo $item1->slug; // SAMPLE DATA: duplicate-post
        // $new_version = $item1->new_version;
        $plugins[$key1]['ZPluginUpdate'] = 1;
        $plugins[$key1]['ZPluginLastChecked'] = $plugin_updates->last_checked;
        $plugins[$key1]['ZPluginNewVersionNumber'] = $item1->new_version;
      }
      // echo "<pre>";
      // var_dump($item);
      // echo "</pre>";
    }
  }

  foreach($plugins as $key => $item) {
    $active = is_plugin_active($key);
    if(is_plugin_active($key) == 1) {
      // active
      $plugins[$key]['ZPluginActive'] = "<img src='images/Green-tick.png' style='height:20px; width:20px;'/> Activated";
      $var___plugins___active_count++;
    } else {
      // inactive
      $plugins[$key]['ZPluginActive'] = "<img src='images/Red-cross.png' style='height:20px; width:20px;'/> Not Activated";
    }
  }
  // echo "<pre>";
  // var_dump($plugins);
  // echo "</pre>";

  return $plugins;
}

function wp_system_snapshot___database_tables() {
  global $wpdb;
  $mytables=$wpdb->get_results("SHOW TABLE STATUS");


  return $mytables;
}

function wp_system_snapshot___database(){

      global $wpdb;
      $dbsize = 0;

      $rows = $wpdb->get_results("SHOW table STATUS");

      foreach($rows as $row)
          $dbsize += $row->Data_length + $row->Index_length;

      $bytes = array('KB', 'KB', 'MB', 'GB', 'TB');

      if ($dbsize < 1024)
          $dbsize = 1;

      for ($i = 0; $dbsize > 1024; $i++)
          $dbsize /= 1024;

      $dbSizeInfo['size'] = round($dbsize, 3);
      $dbSizeInfo['type'] = $bytes[$i];

      return $dbSizeInfo;
}

function wp_system_snapshot___get_php_server_version() {  //needs implimenting
  $zversion = phpversion();
  return $zversion;
}
function wp_system_snapshot___get_php_server_version33() {  //needs implimenting
  $zversion = phpversion();
  return $zversion;
}

function wp_system_snapshot___display_dashboard() {

  global $wpdb;
  $mysqlVersion = $wpdb->db_version();
  // echo "<pre>";
  // var_dump($mysqlVersion);
  // echo "</pre>";

  $zversion = wp_system_snapshot___get_php_server_version();
  $mytables = wp_system_snapshot___database_tables();
  $plugins = wp_system_snapshot___plugins_list();
  $theme_directories = wp_system_snapshot___themes_list();
  $dbSize = wp_system_snapshot___database();

  echo '<h1>WordPress System Snapshot</h1>';

  include('layout3.php'); // overview
  include('layout8.php'); // Wordpress Env
  include('layout5.php'); // Server config
  include('layout7.php'); // database info
  include('layout6.php'); // PHP info
  include('layout.php'); // plugins
  include('layout2.php'); // themes
  include('layout4.php'); // themes
}

?>

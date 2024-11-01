<h2 id="theme">Theme List - <?php echo count($theme_directories); ?> plugins</h2>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Theme Name</th>
      <th>Theme Slug</th>
      <th>Status</th>
      <th>Version</th>
      <th>Author</th>
    </tr>
  </thead>
  <?php
  $i = 0;
    foreach($theme_directories as $key => $item) { $i++;
      $theme_name = $item['theme_file'];
      $theme_name = substr($theme_name, 0, strpos($theme_name, "/"));
      $theme_name = str_replace("-"," ",$theme_name);?>
      <tr>
        <td><?php if (strlen($item['wp_get_theme']['ThemeURI']) > 0){ ?><a href="<?php echo $item['wp_get_theme']['ThemeURI'];?>"><?php } echo $item['wp_get_theme']['Name']; ?></a></td>
        <td><?php echo $theme_name; ?></td>
        <td><?php echo $item['wp_get_theme']['ZActive']; ?></td>
        <td><?php echo $item['wp_get_theme']['Version']; ?></td>
        <td><?php echo $item['wp_get_theme']['Author']; ?></td>
      </tr>
  <?php } ?>
  <tfoot>
    <tr>
      <td><?php echo $i; ?></td>
      <td>Theme slug</td>
      <td><?php echo "1 / " . $i; ?></td>
      <td>Version</td>
      <td>Author</td>
    </tr>
  </tfoot>
</table>

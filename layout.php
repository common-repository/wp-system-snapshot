<h2 id="plugin">Plugin List - <?php echo count($plugins); ?> plugins</h2>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th>Plugin</th>
      <th>Status</th>
      <th>Author</th>
      <th>Update Needed?</th>
      <th>Version</th>
      <th>Latest Version Number</th>
      <th>Last Checked Date</th>
    </tr>
  </thead>
  <?php
  $i = 0;
  foreach($plugins as $key => $item) { $i++;
    $lastCheckedTime = time($item['ZPluginLastChecked']);
    $lastCheckedTime = date('d-m-Y', $lastCheckedTime); ?>
    <tr>
      <td><?php if (strlen($item['AuthorURI']) > 0){ ?><a href="<?php echo $item['AuthorURI'];?>"><?php } echo $item['Name']; ?></a></td>
      <td><?php echo $item['ZPluginActive']; ?></td>
      <td><?php echo $item['AuthorName']; ?></td>
      <td><?php echo $item['ZPluginUpdate']; ?></td>
      <td><?php echo $item['Version']; ?></td>
      <td><?php echo $item['ZPluginNewVersionNumber']; ?></td>
      <td><?php echo $lastCheckedTime; ?></td>
    </tr>
  <?php } ?>
  <tfoot>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo count($var___plugins___active_count) .  " / " . $i; ?></td>
      <td>Author</td>
      <td>Update Needed?</td>
      <td>Version</td>
      <td>Latest Version Number</td>
      <td>Last Checked Date</td>
    </tr>
  </tfoot>
</table>

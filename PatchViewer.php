<?php

require('PatchObject.php');
require('Database.php');

date_default_timezone_set('UTC');
$db = new Database(__DIR__ . '/db.json');
if (!$db->load()) {
	exit(1);
}
$db->sort();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="PatchBot">
    <meta name="author" content="Steffen Lange">
    <meta name="description" content="Patch Notification Robot provides you the latest update notifications.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.patchbot.de/">
    <meta property="og:title" content="PatchBot">
    <meta property="og:description" content="Patch Notification Robot provides you the latest update notifications.">
    <meta property="og:image" content="https://www.patchbot.de/assets/patchbot.jpg">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:url" content="https://www.patchbot.de/">
    <meta property="twitter:title" content="PatchBot">
    <meta property="twitter:description" content="Patch Notification Robot provides you the latest update notifications.">
    <meta property="twitter:image" content="https://www.patchbot.de/assets/patchbot.jpg">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
      $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('#list').DataTable();
      });
    </script>
    <title>PatchBot</title>
  </head>
  <body>
    <div class="container p-5">
      <h2 class="mb-4"><a class="text-decoration-none" href="https://www.patchbot.de/">Patch Notification Robot</a></h2>
      <p class="text-center"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=WYQZCVJPVSS5L&amp;source=url"><img src="assets/btn_donateCC_LG.gif" alt="Donate" width="147" height="47" /></a></p>
      <p><a href="https://www.patchbot.de/rss.xml"><img src="assets/rss.png" alt="Subscribe" width="24" height="24" /></a> <a href="https://twitter.com/Patchbot_de"><img src="assets/twitter.png" alt="Follow me" width="24" height="24" /></a> <a href="https://github.com/stelas/PatchBot"><img src="assets/github.png" alt="Fork me" width="24" height="24" /></a> Providing you the latest update notifications.</p>
      <table id="list" class="table table-bordered table-hover table-sm" data-order='[[ 4, "desc" ]]' data-page-length='25'>
        <thead class="thead-dark">
          <tr>
            <th>Vendor</th>
            <th>Product</th>
            <th>Branch</th>
            <th>Version</th>
            <th data-toggle="tooltip" data-placement="top" title="*) or first discovery time">Release Date<sup>*</sup></th>
          </tr>
        </thead>
        <tbody>
<?php

	for ($i = 0; $i < $db->count(); $i++) {
		$patch = $db->get($i);
		echo '          <tr>';
		echo '<td>' . htmlspecialchars($patch->getVendor()) . '</td>';
		echo '<td><a href="' . htmlspecialchars($patch->getURL()) . '">' . htmlspecialchars($patch->getProduct()) . '</a></td>';
		echo '<td>' . htmlspecialchars($patch->getBranch()) . '</td>';
		echo '<td>' . htmlspecialchars($patch->getVersion()) . '</td>';
		echo '<td>' . date('Y-m-d', $patch->getTimestamp()) . '</td>';
		echo '</tr>' . PHP_EOL;
	}

?>
        </tbody>
      </table>
      <div class="text-right">
        <p><a href="https://www.dateihal.de/cms/imprint">Imprint</a> &amp; <a href="https://www.dateihal.de/cms/privacy">Privacy</a></p>
      </div>
    </div>
  </body>
</html>

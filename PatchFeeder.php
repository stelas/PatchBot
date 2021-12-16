#!/usr/bin/php
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
<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
<atom:link href="https://www.patchbot.de/rss.xml" rel="self" type="application/rss+xml" />
<language>en-us</language>
<title>Patch Notification Robot</title>
<link>https://www.patchbot.de/</link>
<description>Providing you the latest update notifications.</description>
<copyright>© 2019-<?php echo date('y'); ?> Steffen Lange</copyright>
<lastBuildDate><?php echo date(DATE_RSS); ?></lastBuildDate>
<?php

	for ($i = 0; $i < $db->count(); $i++) {
		$patch = $db->get($i);
		echo '<item>';
		$s = htmlspecialchars($patch->getVendor()) . ' released ' . htmlspecialchars($patch->getProduct());
		if (!empty($patch->getBranch()))
			$s .= ' ' . htmlspecialchars($patch->getBranch());
		$s .= ' version ' . htmlspecialchars($patch->getVersion()) . '.';
		echo '<title>' . $s . '</title>';
		echo '<description>' . $s . '</description>';
		echo '<link>' . htmlspecialchars($patch->getURL()) . '</link>';
		echo '<pubDate>' . date(DATE_RSS, $patch->getTimestamp()) . '</pubDate>';
		echo '<guid isPermaLink="false">' . substr(hash('sha256', $patch), 0, 10) . '</guid>';
		echo '</item>' . "\n";
	}

?>
</channel>
</rss>

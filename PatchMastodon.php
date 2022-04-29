#!/usr/bin/php
<?php

require('MastodonBotPHP/Mastodon.php');
require('PatchObject.php');
require('Database.php');
require('MastodonKey.php');

function timestamp() {
	$f = fopen(__DIR__ . '/timestamp-mastodon.dat', 'a+');
	flock($f, LOCK_EX);
	$t = fgets($f);
	ftruncate($f, 0);
	fwrite($f, time());
	fflush($f);
	flock($f, LOCK_UN);
	fclose($f);
	return intval($t);
}

$db = new Database(__DIR__ . '/db.json');
if (!$db->load()) {
	exit(1);
}

$last = timestamp();

$mastodon = new MastodonAPI($MastodonAccessToken, 'https://botsin.space');

for ($i = 0; $i < $db->count(); $i++) {
	$patch = $db->get($i);
	if ($last < $patch->getTimestamp()) {
		$s = $patch->getVendor() . ' released #' . $patch->getProduct();
		if (!empty($patch->getBranch()))
			$s .= ' ' . $patch->getBranch();
		$s .= ' version ' . $patch->getVersion() . '.';
		$len = strlen($s) + 24; // + space + wrapped URL
		$s .= ' ' . $patch->getURL();
		echo $patch->getId() . ': ' . $len . PHP_EOL;
		$dat = ['status' => $s];
		$mastodon->postStatus($dat);
	}
}

?>

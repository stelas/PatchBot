<?php

require('twitter-php/src/twitter.class.php');
require('PatchObject.php');
require('Database.php');
require('TwitterKeys.php');

use DG\Twitter\Twitter;

function timestamp() {
	$f = fopen(__DIR__ . '/timestamp.dat', 'a+');
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

$twitter = new Twitter($TwitterConsumerKey, $TwitterConsumerSecret, $TwitterAccessToken, $TwitterAccessTokenSecret);

for ($i = 0; $i < $db->count(); $i++) {
	$patch = $db->get($i);
	if ($last < $patch->getTimestamp()) {
		$s = $patch->getVendor() . ' released #' . $patch->getProduct();
		if (!empty($patch->getBranch()))
			$s .= ' ' . $patch->getBranch();
		$s .= ' version ' . $patch->getVersion() . '. ' . $patch->getURL();
		try {
			$twitter->send($s);
		} catch (DG\Twitter\Exception $e) {
			fwrite(STDERR, 'ERROR: ' . $e->getMessage() . PHP_EOL);
		}
	}
}

?>

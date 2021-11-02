#!/usr/bin/php
<?php

require('PatchObject.php');
require('PatchBase.php');
require('Database.php');

$list = array();
foreach (new \DirectoryIterator(__DIR__ . '/modules') as $file) {
	if ($file->isFile() && $file->getExtension() == 'php') {
		if ((include __DIR__ . '/modules/' . $file->getFilename()) == TRUE) {
			$name = $file->getBasename('.php');
			array_push($list, new $name());
		}
	}
}
//shuffle($list);

$db = new Database(__DIR__ . '/db.json');
echo 'Time: ' . date('c', $db->time()) . PHP_EOL;
if ($db->load()) {
	foreach ($list as $patch) {
		$oldVer = $db->find($patch->id())->getVersion();
		if ($patch->check()) {
			$newVer = $patch->getPatch()->getVersion();
			echo $patch->id() . ': Version \'' . $newVer . '\' is ';
			if (!empty($newVer) && $newVer != $oldVer) {
				echo "\033[32m" . 'newer than \'' . $oldVer . '\'' . "\033[39m";
				$db->addOrUpdate($patch->getPatch());
			}
			else
				echo "\033[90m" . 'up to date' . "\033[39m";
			echo '.' . PHP_EOL;
		}
		else
			fwrite(STDERR, $patch->id() . ': ' . "\033[31m" . 'CHECK FAILED' . "\033[39m" . '!' . PHP_EOL);
	}
	$db->save();
}

?>

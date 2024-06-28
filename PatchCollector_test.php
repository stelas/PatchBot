#!/usr/bin/php
<?php

require('PatchObject.php');
require('PatchBase.php');
require('Database.php');

$list = array();
foreach (new \DirectoryIterator(__DIR__ . '/modules_test') as $file) {
	if ($file->isFile() && $file->getExtension() == 'php') {
		if ((include __DIR__ . '/modules_test/' . $file->getFilename()) == TRUE) {
			$name = $file->getBasename('.php');
			array_push($list, new $name());
		}
	}
}

$db = new Database(__DIR__ . '/db.json');
echo 'Time: ' . date('c', $db->time()) . PHP_EOL;
if ($db->load()) {
	foreach ($list as $patch) {
		$oldVer = $db->find($patch->id())->getVersion();
		if ($patch->check()) {
			$newVer = $patch->getPatch()->getVersion();
			echo $patch->id() . ': Version \'' . $newVer . '\' ';
			if (!empty($newVer) && $newVer != $oldVer) {
				echo 'is newer than \'' . $oldVer . '\'!';
				$db->addOrUpdate($patch->getPatch());
			}
			else
				echo 'is up to date.';
			echo PHP_EOL;
			echo json_encode($patch->getPatch()->toArray(), JSON_PRETTY_PRINT) . PHP_EOL;
		}
		else
			fwrite(STDERR, $patch . ': CHECK FAILED!' . PHP_EOL);
	}
//	$db->save();
}

?>

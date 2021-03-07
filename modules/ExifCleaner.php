<?php

class ExifCleaner extends PatchBase {
	function __construct() {
		parent::__construct('szTheory', 'ExifCleaner', 'https://exifcleaner.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/szTheory/exifcleaner/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

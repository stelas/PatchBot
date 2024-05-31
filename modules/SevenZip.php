<?php

class SevenZip extends PatchBase {
	function __construct() {
		parent::__construct('Igor Pavlov', '7-Zip', 'https://www.7-zip.org/download.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ip7z/7zip/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

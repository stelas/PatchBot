<?php

class KOReader extends PatchBase {
	function __construct() {
		parent::__construct('KOReader Contributors', 'KOReader', 'http://koreader.rocks/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/koreader/koreader/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

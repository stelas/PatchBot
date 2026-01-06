<?php

class WordTsar extends PatchBase {
	function __construct() {
		parent::__construct('Gerald Brandt', 'WordTsar', 'https://wordtsar.ca/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://sourceforge.net/projects/wordtsar/best_release.json'))
			return $this->parse_json('filename', '/^\/Releases\/WordTsar-(.+)\//');
		return false;
	}
}

?>

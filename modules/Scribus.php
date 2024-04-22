<?php

class Scribus extends PatchBase {
	function __construct() {
		parent::__construct('Scribus Team', 'Scribus', 'https://www.scribus.net/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://sourceforge.net/projects/scribus/best_release.json'))
			return $this->parse_json('filename', '/^\/scribus\/(.+)\//');
		return false;
	}
}

?>

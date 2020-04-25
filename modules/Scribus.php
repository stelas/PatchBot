<?php

class Scribus extends PatchBase {
	function __construct() {
		parent::__construct('Scribus Team', 'Scribus', 'https://www.scribus.net/downloads/stable-branch/');
	}
	function check() : bool {
		if ($this->fetch('https://www.scribus.net/downloads/stable-branch/'))
			return $this->parse('/<strong>Current stable release: Scribus ([\d\.]+)<\/strong>/');
		return false;
	}
}

?>

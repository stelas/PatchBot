<?php

class DokuWiki extends PatchBase {
	function __construct() {
		parent::__construct('Andreas Gohr', 'DokuWiki', 'https://download.dokuwiki.org/');
	}
	function check() : bool {
		if ($this->fetch('https://www.dokuwiki.org/changes'))
			return $this->parse('/Release ([\d-]+[a-z]? (\"|\xE2\x80\x9C)[A-Za-z ]+(\"|\xE2\x80\x9D))/');
		return false;
	}
}

?>

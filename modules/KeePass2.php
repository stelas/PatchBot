<?php

class KeePass2 extends PatchBase {
	function __construct() {
		parent::__construct('Dominik Reichl', 'KeePass', 'https://keepass.info/download.html');
		$this->patch->setBranch('2.x');
	}
	function check() : bool {
		if ($this->fetch_gzip('https://www.dominik-reichl.de/update/version2x.txt.gz'))
			return $this->parse('/KeePass:([\d\.]+)/');
		return false;
	}
}

?>

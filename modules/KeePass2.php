<?php

class KeePass2 extends PatchBase {
	function __construct() {
		parent::__construct('Dominik Reichl', 'KeePass', 'https://keepass.info/download.html');
		$this->patch->setBranch('2.x');
	}
	function check() : bool {
		if ($this->fetch('https://keepass.info/download.html'))
			return $this->parse('_sourceforge\.net/projects/keepass/files/KeePass%202\.x/[\d\.]+/KeePass-([\d\.]+)-Setup\.exe_');
		return false;
	}
}

?>

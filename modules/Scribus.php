<?php

class Scribus extends PatchBase {
	function __construct() {
		parent::__construct('Scribus Team', 'Scribus', 'https://www.scribus.net/downloads/stable-branch/');
	}
	function check() : bool {
		if ($this->fetch('https://www.scribus.net/downloads/'))
			return $this->parse('_//sourceforge\.net/projects/scribus/files/scribus/([\d\.]+)/_');
		return false;
	}
}

?>

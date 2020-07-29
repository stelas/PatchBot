<?php

class Dia extends PatchBase {
	function __construct() {
		parent::__construct('Dia Authors', 'Dia', 'http://dia-installer.de/download/index.html');
	}
	function check() : bool {
		if ($this->fetch('http://dia-installer.de/download/index.html'))
			return $this->parse('/<h3>Dia ([\d\.]+)<\/h3>/');
		return false;
	}
}

?>

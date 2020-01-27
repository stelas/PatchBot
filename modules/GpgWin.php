<?php

class GpgWin extends PatchBase {
	function __construct() {
		parent::__construct('Gpg4win Initiative', 'GNU Privacy Guard for Windows', 'https://www.gpg4win.de/');
	}
	function check() : bool {
		if ($this->fetch('https://www.gpg4win.de/get-gpg4win.html'))
			return $this->parse('/<h2>Download Gpg4win ([\d\.]+) \(/');
		return false;
	}
}

?>

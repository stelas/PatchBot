<?php

class Ghostscript extends PatchBase {
	function __construct() {
		parent::__construct('Artifex Software', 'Ghostscript', 'https://www.ghostscript.com/releases/gsdnld.html');
	}
	function check() : bool {
		if ($this->fetch('https://ghostscript.com/releases/index.html'))
			return $this->parse('/The latest release is Ghostscript ([\d\.]+)/');
		return false;
	}
}

?>

<?php

class Ghostscript extends PatchBase {
	function __construct() {
		parent::__construct('Artifex Software', 'Ghostscript', 'https://www.ghostscript.com/download/gsdnld.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.ghostscript.com/download/gsdnld.html'))
			return $this->parse('/<a name="SRC"><\/a>Ghostscript ([\d\.]+) Source/');
		return false;
	}
}

?>

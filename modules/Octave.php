<?php

class Octave extends PatchBase {
	function __construct() {
		parent::__construct('John W. Eaton', 'GNU Octave', 'https://www.gnu.org/software/octave/download');
	}
	function check() : bool {
		if ($this->fetch('https://www.gnu.org/software/octave/download'))
			return $this->parse('_//ftpmirror\.gnu\.org/octave/windows/octave-([\d\.]+)-w64-installer\.exe_');
		return false;
	}
}

?>

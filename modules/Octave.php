<?php

class Octave extends PatchBase {
	function __construct() {
		parent::__construct('John W. Eaton', 'GNU Octave', 'https://octave.org/download');
	}
	function check() : bool {
		if ($this->fetch('https://octave.org/download'))
			return $this->parse('/<strong>GNU Octave ([\d\.]+)<\/strong>/');
		return false;
	}
}

?>

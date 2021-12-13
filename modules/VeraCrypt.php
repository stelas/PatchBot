<?php

class VeraCrypt extends PatchBase {
	function __construct() {
		parent::__construct('IDRIX', 'VeraCrypt', 'https://www.veracrypt.fr/en/Downloads.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.veracrypt.fr/en/Downloads.html'))
			return $this->parse('_//launchpad\.net/veracrypt/trunk/[\d\.]+[a-z]?[-a-z\d]*/\+download/VeraCrypt%20Setup%20([\d\.]+[a-z]?[-A-Za-z\d]*)\.exe_');
		return false;
	}
}

?>

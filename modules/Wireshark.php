<?php

class Wireshark extends PatchBase {
	function __construct() {
		parent::__construct('Gerald Combs', 'Wireshark', 'https://www.wireshark.org/');
	}
	function check() : bool {
		if ($this->fetch('https://www.wireshark.org/download.html'))
			return $this->parse('/Stable Release: ([\d\.]+)/');
		return false;
	}
}

?>

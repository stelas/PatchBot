<?php

class UltraVNC extends PatchBase {
	function __construct() {
		parent::__construct('UltraVNC Team', 'UltraVNC', 'https://uvnc.com/downloads/ultravnc.html');
	}
	function check() : bool {
		if ($this->fetch('https://uvnc.com/downloads/ultravnc.html'))
			return $this->parse('/Latest release version: ([\d\.]+)/u');
		return false;
	}
}

?>

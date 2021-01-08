<?php

class TightVNC extends PatchBase {
	function __construct() {
		parent::__construct('GlavSoft LLC', 'TightVNC', 'https://www.tightvnc.com/download.php');
	}
	function check() : bool {
		if ($this->fetch('https://www.tightvnc.com/download.php'))
			return $this->parse('/Download TightVNC for Windows \(Version ([\d\.]+)\)/');
		return false;
	}
}

?>

<?php

class WinSCP extends PatchBase {
	function __construct() {
		parent::__construct('Martin Přikryl', 'WinSCP', 'https://winscp.net/eng/download.php');
	}
	function check() : bool {
		if ($this->fetch('https://winscp.net/eng/download.php'))
			return $this->parse('_/download/WinSCP-([\d\.]+)-Setup\.exe_');
		return false;
	}
}

?>

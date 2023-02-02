<?php

class FreeFileSync extends PatchBase {
	function __construct() {
		parent::__construct('Zenju', 'FreeFileSync', 'https://freefilesync.org/download.php');
	}
	function check() : bool {
		if ($this->fetch('https://api.freefilesync.org/latest_version'))
			return $this->parse('/([\d\.]+)/');
		return false;
	}
}

?>

<?php

class ApacheDirectoryStudio extends PatchBase {
	function __construct() {
		parent::__construct('Apache Foundation', 'Directory Studio', 'https://directory.apache.org/studio/downloads.html');
	}
	function check() : bool {
		if ($this->fetch('https://directory.apache.org/studio/'))
			return $this->parse('/>Version ([\d\.]+[-M\d]*)</');
		return false;
	}
}

?>

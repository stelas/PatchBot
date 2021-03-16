<?php

class ApacheDirectoryStudio extends PatchBase {
	function __construct() {
		parent::__construct('Apache Foundation', 'Directory Studio', 'https://directory.apache.org/studio/downloads.html');
	}
	function check() : bool {
		if ($this->fetch('https://directory.apache.org/studio/'))
			return $this->parse('/<b>Download Apache<br>Directory Studio ([\d\.]+[-M\d]*)<\/b>/');
		return false;
	}
}

?>

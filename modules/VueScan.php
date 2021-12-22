<?php

class VueScan extends PatchBase {
	function __construct() {
		parent::__construct('Hamrick Software', 'VueScan', 'https://www.hamrick.com/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://d1t4l16dpbiwrj.cloudfront.net/menu.min.js'))
			return $this->parse('/var ve="([\d\.]+)";/');
		return false;
	}
}

?>

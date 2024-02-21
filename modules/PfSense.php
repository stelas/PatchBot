<?php

class PfSense extends PatchBase {
	function __construct() {
		parent::__construct('Electric Sheep Fencing', 'pfSense', 'https://www.pfsense.org/download/');
		$this->patch->setBranch('Community Edition');
	}
	function check() : bool {
		if ($this->fetch('https://www.pfsense.org/download/'))
			return $this->parse('/pfSense-CE-([\d\._]+)-RELEASE-amd64\.iso\.gz/');
		return false;
	}
}

?>

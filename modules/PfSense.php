<?php

class PfSense extends PatchBase {
	function __construct() {
		parent::__construct('Electric Sheep Fencing', 'pfSense', 'https://www.pfsense.org/download/');
		$this->patch->setBranch('Community Edition');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/pfsense/pfsense/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

<?php

class RPort extends PatchBase {
	function __construct() {
		parent::__construct('CloudRadar', 'RPort', 'https://oss.rport.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/cloudradar-monitoring/rport/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

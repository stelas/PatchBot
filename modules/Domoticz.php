<?php

class Domoticz extends PatchBase {
	function __construct() {
		parent::__construct('Robbert E. Peters', 'Domoticz', 'https://www.domoticz.com/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/domoticz/domoticz/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

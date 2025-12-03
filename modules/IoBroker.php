<?php

class IoBroker extends PatchBase {
	function __construct() {
		parent::__construct('Denis Haev', 'ioBroker', 'https://www.iobroker.net/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ioBroker/ioBroker/releases/latest'))
			return $this->parse_json('name');
		return false;
	}
}

?>

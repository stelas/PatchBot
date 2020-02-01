<?php

class Tasmota extends PatchBase {
	function __construct() {
		parent::__construct('Theo Arends', 'Tasmota', 'https://github.com/arendst/Tasmota');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/arendst/Tasmota/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

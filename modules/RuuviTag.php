<?php

class RuuviTag extends PatchBase {
	function __construct() {
		parent::__construct('Ruuvi Innovations', 'RuuviTag', 'https://ruuvi.com/software-update/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ruuvi/ruuvi.firmware.c/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

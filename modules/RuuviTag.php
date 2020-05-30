<?php

class RuuviTag extends PatchBase {
	function __construct() {
		parent::__construct('Ruuvi Innovations', 'RuuviTag', 'https://lab.ruuvi.com/dfu/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/ruuvi/ruuvitag_fw/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

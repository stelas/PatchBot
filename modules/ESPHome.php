<?php

class ESPHome extends PatchBase {
	function __construct() {
		parent::__construct('ESPHome Developers', 'ESPHome', 'https://esphome.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/esphome/esphome/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

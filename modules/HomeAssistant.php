<?php

class HomeAssistant extends PatchBase {
	function __construct() {
		parent::__construct('Home Assistant Authors', 'Home Assistant Core', 'https://www.home-assistant.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/home-assistant/core/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

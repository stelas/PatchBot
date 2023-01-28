<?php

class ESPEasy extends PatchBase {
	function __construct() {
		parent::__construct('LetsControlIt', 'ESPEasy', 'http://www.espeasy.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/letscontrolit/ESPEasy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

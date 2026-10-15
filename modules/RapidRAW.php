<?php

class RapidRAW extends PatchBase {
	function __construct() {
		parent::__construct('Timon Käch', 'RapidRAW', 'https://getrapidraw.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/CyberTimon/RapidRAW/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

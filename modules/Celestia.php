<?php

class Celestia extends PatchBase {
	function __construct() {
		parent::__construct('Celestia Development Team', 'Celestia', 'https://celestia.space/download.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/CelestiaProject/Celestia/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

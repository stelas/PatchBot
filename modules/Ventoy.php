<?php

class Ventoy extends PatchBase {
	function __construct() {
		parent::__construct('longpanda', 'Ventoy', 'https://www.ventoy.net/en/download.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ventoy/Ventoy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

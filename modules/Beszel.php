<?php

class Beszel extends PatchBase {
	function __construct() {
		parent::__construct('henrygd', 'Beszel', 'https://www.beszel.dev/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/henrygd/beszel/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Gerbera extends PatchBase {
	function __construct() {
		parent::__construct('Gerbera Contributors', 'Gerbera', 'https://gerbera.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/gerbera/gerbera/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

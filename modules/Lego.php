<?php

class Lego extends PatchBase {
	function __construct() {
		parent::__construct('Ludovic Fernandez', 'lego', 'https://go-acme.github.io/lego/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/go-acme/lego/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

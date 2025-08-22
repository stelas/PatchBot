<?php

class Godap extends PatchBase {
	function __construct() {
		parent::__construct('Artur Marzano', 'godap', 'https://github.com/Macmod/godap');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Macmod/godap/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

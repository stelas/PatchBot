<?php

class AutoHotkey extends PatchBase {
	function __construct() {
		parent::__construct('Chris Mallett & Steve Gray', 'AutoHotkey', 'https://www.autohotkey.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Lexikos/AutoHotKey_L/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

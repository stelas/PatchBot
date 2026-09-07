<?php

class Audacity extends PatchBase {
	function __construct() {
		parent::__construct('Audacity Team', 'Audacity', 'https://www.audacityteam.org/download/windows/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/audacity/audacity/releases/latest'))
			return $this->parse_json('tag_name', '/Audacity-(.+)/');
		return false;
	}
}

?>

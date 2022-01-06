<?php

class LibreCAD extends PatchBase {
	function __construct() {
		parent::__construct('LibreCAD Team', 'LibreCAD', 'https://librecad.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/LibreCAD/LibreCAD/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

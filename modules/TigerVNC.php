<?php

class TigerVNC extends PatchBase {
	function __construct() {
		parent::__construct('TigerVNC Team', 'TigerVNC', 'https://tigervnc.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/TigerVNC/tigervnc/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

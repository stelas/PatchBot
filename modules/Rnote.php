<?php

class Rnote extends PatchBase {
	function __construct() {
		parent::__construct('Felix Zwettler', 'Rnote', 'https://rnote.flxzt.net/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/flxzt/rnote/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

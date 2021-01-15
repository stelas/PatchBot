<?php

class Gogs extends PatchBase {
	function __construct() {
		parent::__construct('Gogs Authors', 'Gogs', 'https://gogs.io/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/gogs/gogs/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

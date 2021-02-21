<?php

class Gogs extends PatchBase {
	function __construct() {
		parent::__construct('Gogs Authors', 'Gogs', 'https://gogs.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/gogs/gogs/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

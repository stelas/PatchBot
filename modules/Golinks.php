<?php

class Golinks extends PatchBase {
	function __construct() {
		parent::__construct('James Mills', 'golinks', 'https://git.mills.io/prologic/golinks');
	}
	function check() : bool {
		if ($this->fetch_json('https://git.mills.io/api/v1/repos/prologic/golinks/releases?pre-release=false&limit=1'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

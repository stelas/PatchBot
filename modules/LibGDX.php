<?php

class LibGDX extends PatchBase {
	function __construct() {
		parent::__construct('Mario Zechner & Nathan Sweet', 'libGDX', 'https://libgdx.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/libgdx/libgdx/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

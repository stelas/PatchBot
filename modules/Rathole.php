<?php

class Rathole extends PatchBase {
	function __construct() {
		parent::__construct('Yujia Qiao', 'rathole', 'https://github.com/rapiz1/rathole');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/rapiz1/rathole/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

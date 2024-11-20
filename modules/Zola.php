<?php

class Zola extends PatchBase {
	function __construct() {
		parent::__construct('Vincent Prouillet', 'Zola', 'https://www.getzola.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/getzola/zola/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

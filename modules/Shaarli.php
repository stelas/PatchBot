<?php

class Shaarli extends PatchBase {
	function __construct() {
		parent::__construct('Sébastien Sauvage', 'Shaarli', 'https://shaarli.readthedocs.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/shaarli/Shaarli/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

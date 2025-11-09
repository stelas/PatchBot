<?php

class Doxx extends PatchBase {
	function __construct() {
		parent::__construct('Brandon M. Greenwell', 'doxx', 'https://bgreenwell.github.io/doxx/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/bgreenwell/doxx/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

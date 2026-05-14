<?php

class SuperProductivity extends PatchBase {
	function __construct() {
		parent::__construct('Johannes Millan', 'Super Productivity', 'https://super-productivity.com/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/super-productivity/super-productivity/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class GoDNS extends PatchBase {
	function __construct() {
		parent::__construct('Timothy Ye', 'GoDNS', 'https://github.com/TimothyYe/godns');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/TimothyYe/godns/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

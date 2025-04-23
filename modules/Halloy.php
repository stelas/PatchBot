<?php

class Halloy extends PatchBase {
	function __construct() {
		parent::__construct('Squidowl Team', 'Halloy', 'https://halloy.chat/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/squidowl/halloy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

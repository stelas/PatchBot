<?php

class OpenBVE extends PatchBase {
	function __construct() {
		parent::__construct('OpenBVE Project', 'OpenBVE', 'https://openbve-project.net/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/leezer3/OpenBVE/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

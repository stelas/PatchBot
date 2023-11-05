<?php

class Gitness extends PatchBase {
	function __construct() {
		parent::__construct('Harness Inc.', 'Gitness', 'https://gitness.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/harness/gitness/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

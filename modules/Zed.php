<?php

class Zed extends PatchBase {
	function __construct() {
		parent::__construct('Zed Industries Inc.', 'Zed', 'https://zed.dev/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/zed-industries/zed/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

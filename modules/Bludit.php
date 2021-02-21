<?php

class Bludit extends PatchBase {
	function __construct() {
		parent::__construct('Diego Najar', 'Bludit', 'https://www.bludit.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/bludit/bludit/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

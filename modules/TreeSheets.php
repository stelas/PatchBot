<?php

class TreeSheets extends PatchBase {
	function __construct() {
		parent::__construct('Wouter van Oortmerssen', 'TreeSheets', 'http://strlen.com/treesheets/');
		$this->patch->setBranch('Continuous');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/aardappel/treesheets/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

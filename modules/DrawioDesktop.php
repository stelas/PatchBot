<?php

class DrawioDesktop extends PatchBase {
	function __construct() {
		parent::__construct('JGraph Ltd', 'draw.io', 'https://www.diagrams.net/');
		$this->patch->setBranch('Desktop');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/jgraph/drawio-desktop/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

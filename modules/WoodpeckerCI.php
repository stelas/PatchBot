<?php

class WoodpeckerCI extends PatchBase {
	function __construct() {
		parent::__construct('Woodpecker Authors', 'Woodpecker CI', 'https://woodpecker-ci.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/woodpecker-ci/woodpecker/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

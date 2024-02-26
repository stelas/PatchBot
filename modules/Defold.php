<?php

class Defold extends PatchBase {
	function __construct() {
		parent::__construct('Defold Foundation', 'Defold', 'https://defold.com/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/defold/defold/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

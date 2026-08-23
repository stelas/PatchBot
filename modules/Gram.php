<?php

class Gram extends PatchBase {
	function __construct() {
		parent::__construct('Kristoffer Grönlund', 'Gram', 'https://gram-editor.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://codeberg.org/api/v1/repos/GramEditor/gram/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

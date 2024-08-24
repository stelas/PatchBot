<?php

class Helix extends PatchBase {
	function __construct() {
		parent::__construct('Helix Contributors', 'Helix', 'https://helix-editor.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/helix-editor/helix/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

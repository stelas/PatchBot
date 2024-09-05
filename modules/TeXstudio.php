<?php

class TeXstudio extends PatchBase {
	function __construct() {
		parent::__construct('J. Sundermeyer, D. Braun, T. Hoffmann', 'TeXstudio', 'https://www.texstudio.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/texstudio-org/texstudio/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

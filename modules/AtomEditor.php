<?php

class AtomEditor extends PatchBase {
	function __construct() {
		parent::__construct('GitHub Inc.', 'Atom Editor', 'https://atom.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/atom/atom/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

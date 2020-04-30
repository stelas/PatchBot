<?php

class Darktable extends PatchBase {
	function __construct() {
		parent::__construct('Darktable Team', 'darktable', 'https://www.darktable.org/install/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/darktable-org/darktable/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

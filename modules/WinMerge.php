<?php

class WinMerge extends PatchBase {
	function __construct() {
		parent::__construct('WinMerge Development Team', 'WinMerge', 'https://winmerge.org/downloads/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/winmerge/winmerge/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

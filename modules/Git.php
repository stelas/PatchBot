<?php

class Git extends PatchBase {
	function __construct() {
		parent::__construct('Linus Torvalds', 'Git for Windows', 'https://gitforwindows.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/git-for-windows/git/releases/latest'))
			return $this->parse_json('tag_name', '/v(.+)\.windows\.\d+/');
		return false;
	}
}

?>

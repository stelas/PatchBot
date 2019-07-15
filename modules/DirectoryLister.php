<?php

class DirectoryLister extends PatchBase {
	function __construct() {
		parent::__construct('Chris Kankiewicz', 'Directory Lister', 'https://www.directorylister.com/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/DirectoryLister/DirectoryLister/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

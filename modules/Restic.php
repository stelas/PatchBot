<?php

class Restic extends PatchBase {
	function __construct() {
		parent::__construct('Alexander Neumann', 'restic', 'https://restic.net/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/restic/restic/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

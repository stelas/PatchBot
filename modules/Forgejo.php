<?php

class Forgejo extends PatchBase {
	function __construct() {
		parent::__construct('Forgejo Authors', 'Forgejo', 'https://forgejo.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://codeberg.org/api/v1/repos/forgejo/forgejo/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

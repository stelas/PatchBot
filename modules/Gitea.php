<?php

class Gitea extends PatchBase {
	function __construct() {
		parent::__construct('Gitea Authors', 'Gitea', 'https://gitea.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/go-gitea/gitea/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

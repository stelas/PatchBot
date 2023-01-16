<?php

class Kopia extends PatchBase {
	function __construct() {
		parent::__construct('Kopia Project', 'Kopia', 'https://kopia.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/kopia/kopia/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

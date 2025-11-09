<?php

class Deskflow extends PatchBase {
	function __construct() {
		parent::__construct('Deskflow Contributors', 'Deskflow', 'https://deskflow.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/deskflow/deskflow/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

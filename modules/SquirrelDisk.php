<?php

class SquirrelDisk extends PatchBase {
	function __construct() {
		parent::__construct('Adileo Barone', 'SquirrelDisk', 'https://www.squirreldisk.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/adileo/squirreldisk/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

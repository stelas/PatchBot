<?php

class Scrcpy extends PatchBase {
	function __construct() {
		parent::__construct('Romain Vimont', 'scrcpy', 'https://github.com/Genymobile/scrcpy');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Genymobile/scrcpy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

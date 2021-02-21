<?php

class Croc extends PatchBase {
	function __construct() {
		parent::__construct('Zack', 'croc', 'https://schollz.com/software/croc6');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/schollz/croc/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

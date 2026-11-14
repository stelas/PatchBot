<?php

class CompressO extends PatchBase {
	function __construct() {
		parent::__construct('Niraj Khatiwada', 'CompressO', 'https://compresso.codeforreal.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/codeforreal1/compressO/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Memtest extends PatchBase {
	function __construct() {
		parent::__construct('Samuel Demeulemeester', 'Memtest86+', 'https://www.memtest.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/memtest86plus/memtest86plus/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

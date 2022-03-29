<?php

class Memtest extends PatchBase {
	function __construct() {
		parent::__construct('Samuel Demeulemeester', 'Memtest86+', 'https://www.memtest.org/');
	}
	function check() : bool {
		if ($this->fetch('https://www.memtest.org/'))
			return $this->parse('/LATEST\s+VERSION : ([\d\.]+[a-z]?)/');
		return false;
	}
}

?>

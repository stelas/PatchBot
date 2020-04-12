<?php

class WordPress extends PatchBase {
	function __construct() {
		parent::__construct('WordPress Foundation', 'WordPress', 'https://wordpress.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://wordpress.org/download/'))
			return $this->parse('/Download WordPress ([\d\.]+)/');
		return false;
	}
}

?>

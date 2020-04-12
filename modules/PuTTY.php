<?php

class PuTTY extends PatchBase {
	function __construct() {
		parent::__construct('Simon Tatham', 'PuTTY', 'https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html'))
			return $this->parse('/latest release \(([\d\.]+)\)/');
		return false;
	}
}

?>

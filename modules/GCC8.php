<?php

class GCC8 extends PatchBase {
	function __construct() {
		parent::__construct('Free Software Foundation', 'GNU Compiler Collection', 'https://gcc.gnu.org/');
		$this->patch->setBranch('8');
	}
	function check() : bool {
		if ($this->fetch('https://gcc.gnu.org/'))
			return $this->parse('/<span class="version"><a href="gcc-8\/">GCC ([\d\.]+)/');
		return false;
	}
}

?>

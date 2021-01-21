<?php

class SublimeText3 extends PatchBase {
	function __construct() {
		parent::__construct('Sublime HQ', 'Sublime Text', 'https://www.sublimetext.com/3');
		$this->patch->setBranch('3');
	}
	function check() : bool {
		if ($this->fetch('https://www.sublimetext.com/3'))
			return $this->parse('/<p class="latest"><i>Version:<\/i> Build (\d+)<\/p>/');
		return false;
	}
}

?>

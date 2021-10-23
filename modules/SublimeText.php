<?php

class SublimeText extends PatchBase {
	function __construct() {
		parent::__construct('Sublime HQ', 'Sublime Text', 'https://www.sublimetext.com/download');
	}
	function check() : bool {
		if ($this->fetch('https://www.sublimetext.com/download'))
			return $this->parse('/<p class="latest"><i>Version:<\/i> Build (\d+)<\/p>/');
		return false;
	}
}

?>

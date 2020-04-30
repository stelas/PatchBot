<?php

class Audacity extends PatchBase {
	function __construct() {
		parent::__construct('Audacity Team', 'Audacity', 'https://www.audacityteam.org/download/windows/');
	}
	function check() : bool {
		if ($this->fetch('https://www.audacityteam.org/download/windows/'))
			return $this->parse('/<h2>Current Version: ([\d\.]+)<\/h2>/');
		return false;
	}
}

?>

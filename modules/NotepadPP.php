<?php

class NotepadPP extends PatchBase {
	function __construct() {
		parent::__construct('Don Ho', 'Notepad++', 'https://notepad-plus-plus.org/downloads/');
	}
	function check() : bool {
		if ($this->fetch('https://notepad-plus-plus.org/'))
			return $this->parse('/<strong>Current Version ([\d\.]+)<\/strong>/');
		return false;
	}
}

?>

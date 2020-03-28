<?php

class LibreOfficeFresh extends PatchBase {
	function __construct() {
		parent::__construct('The Document Foundation', 'LibreOffice - Fresh Branch', 'https://www.libreoffice.org/download/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.libreoffice.org/download/release-notes/'))
			return $this->parse('/name="Fresh"><\/a>LibreOffice ([\d\.]+) \(/');
		return false;
	}
}

?>

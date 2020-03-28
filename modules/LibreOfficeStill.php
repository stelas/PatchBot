<?php

class LibreOfficeStill extends PatchBase {
	function __construct() {
		parent::__construct('The Document Foundation', 'LibreOffice - Still Branch', 'https://www.libreoffice.org/download/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.libreoffice.org/download/release-notes/'))
			return $this->parse('/name="Still"><\/a>LibreOffice ([\d\.]+) \(/');
		return false;
	}
}

?>

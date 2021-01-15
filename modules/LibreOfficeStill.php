<?php

class LibreOfficeStill extends PatchBase {
	function __construct() {
		parent::__construct('Document Foundation', 'LibreOffice', 'https://www.libreoffice.org/download/download/');
		$this->patch->setBranch('Still');
	}
	function check() : bool {
		if ($this->fetch('https://www.libreoffice.org/download/release-notes/'))
			return $this->parse('/name="Still"><\/a>LibreOffice ([\d\.]+) \(/');
		return false;
	}
}

?>

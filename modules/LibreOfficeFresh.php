<?php

class LibreOfficeFresh extends PatchBase {
	function __construct() {
		parent::__construct('The Document Foundation', 'LibreOffice', 'https://www.libreoffice.org/download/download/');
		$this->patch->setBranch('Fresh');
	}
	function check() : bool {
		if ($this->fetch('https://www.libreoffice.org/download/release-notes/'))
			return $this->parse('/name="Fresh"><\/a>LibreOffice ([\d\.]+) \(/');
		return false;
	}
}

?>

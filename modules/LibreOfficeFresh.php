<?php

class LibreOfficeFresh extends PatchBase {
	function __construct() {
		parent::__construct('Document Foundation', 'LibreOffice', 'https://www.libreoffice.org/download/download-libreoffice/');
		$this->patch->setBranch('Fresh');
	}
	function check() : bool {
		if ($this->fetch('https://update.libreoffice.org/check.php', array('CURLOPT_USERAGENT' => 'LibreOffice 24.2.0.1 (b4d45829793cddfe67b58a53f495528c75738d8a; Windows; X86_64; )')))
			return $this->parse('/<inst:version>([\d\.]+)<\/inst:version>/');
		return false;
	}
}

?>

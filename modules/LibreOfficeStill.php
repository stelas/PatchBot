<?php

class LibreOfficeStill extends PatchBase {
	function __construct() {
		parent::__construct('Document Foundation', 'LibreOffice', 'https://www.libreoffice.org/download/download-libreoffice/');
		$this->patch->setBranch('Still');
	}
	function check() : bool {
		if ($this->fetch('https://update.libreoffice.org/check.php', array('CURLOPT_USERAGENT' => 'LibreOffice 7.6.3.2 (29d686fea9f6705b262d369fede658f824154cc0; Windows; X86_64; )')))
			return $this->parse('/<inst:version>([\d\.]+)<\/inst:version>/');
		return false;
	}
}

?>

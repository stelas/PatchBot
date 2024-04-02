<?php

class LibreOfficeStill extends PatchBase {
	function __construct() {
		parent::__construct('Document Foundation', 'LibreOffice', 'https://www.libreoffice.org/download/download-libreoffice/');
		$this->patch->setBranch('Still');
	}
	function check() : bool {
		if ($this->fetch('https://update.libreoffice.org/check.php', array('CURLOPT_USERAGENT' => 'LibreOffice 7.6.2.1 (56f7684011345957bbf33a7ee678afaf4d2ba333; Windows; X86_64; )')))
			return $this->parse('/<inst:version>([\d\.]+)<\/inst:version>/');
		return false;
	}
}

?>

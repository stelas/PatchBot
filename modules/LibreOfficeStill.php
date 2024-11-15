<?php

class LibreOfficeStill extends PatchBase {
	function __construct() {
		parent::__construct('Document Foundation', 'LibreOffice', 'https://www.libreoffice.org/download/download-libreoffice/');
		$this->patch->setBranch('Still');
	}
	function check() : bool {
		if ($this->fetch('https://update.libreoffice.org/check.php', array('CURLOPT_USERAGENT' => 'LibreOffice 0 (3215f89-f603614-ab984f2-7348103-1225a5b; Windows; x86; )')))
			return $this->parse('/<inst:version>([\d\.]+)<\/inst:version>/');
		return false;
	}
}

?>

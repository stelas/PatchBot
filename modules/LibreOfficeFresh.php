<?php

class LibreOfficeFresh extends PatchBase {
	function __construct() {
		parent::__construct('Document Foundation', 'LibreOffice', 'https://www.libreoffice.org/download/download-libreoffice/');
		$this->patch->setBranch('Fresh');
	}
	function check() : bool {
		if ($this->fetch('https://update.libreoffice.org/check.php', array('CURLOPT_USERAGENT' => 'LibreOffice 0 (b6c8ba5-8c0b455-0b5e650-d7f0dd3-b100c87; Windows; x86; )')))
			return $this->parse('/<inst:version>([\d\.]+)<\/inst:version>/');
		return false;
	}
}

?>

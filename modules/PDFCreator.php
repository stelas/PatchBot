<?php

class PDFCreator extends PatchBase {
	function __construct() {
		parent::__construct('pdfforge', 'PDFCreator', 'https://download.pdfforge.org/download/pdfcreator');
	}
	function check() : bool {
		if ($this->fetch('https://download.pdfforge.org/download/pdfcreator'))
			return $this->parse('/Stable Release ([\d\.]+)/');
		return false;
	}
}

?>

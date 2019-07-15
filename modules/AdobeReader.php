<?php

class AdobeReader extends PatchBase {
	function __construct() {
		parent::__construct('Adobe', 'Acrobat Reader DC', 'https://get.adobe.com/de/reader/');
	}
	function check() : bool {
		if ($this->fetch('https://get.adobe.com/de/reader/'))
			return $this->parse('_<strong>Version ([\d\.]+)</strong>_');
		return false;
	}
}

?>

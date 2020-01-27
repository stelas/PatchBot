<?php

class AdobeReader extends PatchBase {
	function __construct() {
		parent::__construct('Adobe', 'Acrobat Reader DC', 'https://get.adobe.com/reader/');
	}
	function check() : bool {
		if ($this->fetch('https://www.adobe.com/devnet-docs/acrobatetk/tools/ReleaseNotesDC/index.html'))
			return $this->parse('/next: ([\d\.]+)/');
		return false;
	}
}

?>

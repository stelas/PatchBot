<?php

class AdobeReader extends PatchBase {
	function __construct() {
		parent::__construct('Adobe', 'Acrobat Reader DC', 'https://get.adobe.com/de/reader/');
	}
	function check() : bool {
		if ($this->fetch('https://www.adobe.com/devnet-docs/acrobatetk/tools/ReleaseNotesDC/index.html'))
			return $this->parse('/title="([\d\.]+)/');
		return false;
	}
}

?>

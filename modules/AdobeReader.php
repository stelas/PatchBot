<?php

class AdobeReader extends PatchBase {
	function __construct() {
		parent::__construct('Adobe', 'Acrobat Reader', 'https://get.adobe.com/reader/');
		$this->patch->setBranch('DC');
	}
	function check() : bool {
		if ($this->fetch('https://www.adobe.com/devnet-docs/acrobatetk/tools/ReleaseNotesDC/index.html'))
			return $this->parse('/next: ([\d\.]+)/');
		return false;
	}
}

?>

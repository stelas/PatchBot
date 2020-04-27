<?php

class FloccusChrome extends PatchBase {
	function __construct() {
		parent::__construct('Marcel Klehr', 'floccus', 'https://chrome.google.com/webstore/detail/floccus-bookmarks-sync/fnaicdffflnofjppbagibeoednhnbjhg');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/floccus-bookmarks-sync/fnaicdffflnofjppbagibeoednhnbjhg'))
			return $this->parse('/<meta itemprop="version" content="([\d\.]+)"\/>/');
		return false;
	}
}

?>

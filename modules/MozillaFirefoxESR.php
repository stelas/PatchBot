<?php

class MozillaFirefoxESR extends PatchBase {
	function __construct() {
		parent::__construct('Mozilla', 'Firefox', 'https://www.mozilla.org/en-US/firefox/organizations/all/');
		$this->patch->setBranch('ESR');
	}
	function check() : bool {
		if ($this->fetch('https://www.mozilla.org/en-US/firefox/organizations/all/'))
			return $this->parse('/data-esr-versions="([\d\.]+)[ "]/');
		return false;
	}
}

?>

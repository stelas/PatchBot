<?php

class MozillaFirefoxESR extends PatchBase {
	function __construct() {
		parent::__construct('Mozilla', 'Firefox ESR', 'https://www.mozilla.org/en-US/firefox/organizations/all/');
	}
	function check() : bool {
		if ($this->fetch('https://www.mozilla.org/de/firefox/organizations/all/'))
			return $this->parse('/data-esr-versions="([\d\.]+)[ "]/');
		return false;
	}
}

?>

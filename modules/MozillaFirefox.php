<?php

class MozillaFirefox extends PatchBase {
	function __construct() {
		parent::__construct('Mozilla', 'Firefox', 'https://www.mozilla.org/en-US/firefox/all/');
	}
	function check() : bool {
		if ($this->fetch('https://www.mozilla.org/en-US/firefox/all/'))
			return $this->parse('/data-latest-firefox="([\d\.]+)"/');
		return false;
	}
}

?>

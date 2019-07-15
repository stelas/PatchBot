<?php

class GoogleChrome extends PatchBase {
	function __construct() {
		parent::__construct('Google', 'Chrome', 'https://www.google.de/chrome/');
	}
	function check() : bool {
		if ($this->fetch('https://omahaproxy.appspot.com/all'))
			return $this->parse('/win64,stable,([\d\.]+),/');
		return false;
	}
}

?>

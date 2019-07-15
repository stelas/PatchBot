<?php

class GIMP extends PatchBase {
	function __construct() {
		parent::__construct('GIMP Team', 'GNU Image Manipulation Program', 'https://www.gimp.org/');
	}
	function check() : bool {
		if ($this->fetch('https://www.gimp.org/downloads/'))
			return $this->parse('_//download\.gimp\.org/mirror/pub/gimp/v[\d\.]+/windows/gimp-([\d\.]+)-setup[\-\d]*\.exe_');
		return false;
	}
}

?>

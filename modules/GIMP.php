<?php

class GIMP extends PatchBase {
	function __construct() {
		parent::__construct('GIMP Team', 'GNU Image Manipulation Program', 'https://www.gimp.org/downloads/');
	}
	function check() : bool {
		if ($this->fetch('https://www.gimp.org/downloads/'))
			return $this->parse('_//download\.gimp\.org/gimp/v[\d\.]+/windows/gimp-([\d\.]+)-setup[-\d]*\.exe_');
		return false;
	}
}

?>

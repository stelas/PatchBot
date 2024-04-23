<?php

class RawTherapee extends PatchBase {
	function __construct() {
		parent::__construct('Gabor Horvath', 'RawTherapee', 'https://rawtherapee.com/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Beep6581/RawTherapee/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

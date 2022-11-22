<?php

class Zoom extends PatchBase {
	function __construct() {
		parent::__construct('Zoom Video Communications', 'Zoom', 'https://zoom.us/download');
	}
	function check() : bool {
		if ($this->fetch('https://zoom.us/client/latest/ZoomInstaller.exe', false))
			return $this->parse('/\/prod\/([\d\.]+)\/ZoomInstaller\.exe/');
		return false;
	}
}

?>

<?php

class Zoom extends PatchBase {
	function __construct() {
		parent::__construct('Zoom Video Communications', 'Zoom Workplace', 'https://zoom.us/download/admin');
	}
	function check() : bool {
		if ($this->fetch_header('https://zoom.us/client/latest/ZoomInstaller.exe?archType=x64'))
			return $this->parse('/\/prod\/([\d\.]+)\/x64\/ZoomInstaller\.exe/');
		return false;
	}
}

?>

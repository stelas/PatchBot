<?php

class Zoom extends PatchBase {
	function __construct() {
		parent::__construct('Zoom Video Communications', 'Zoom', 'https://zoom.us/download/admin');
	}
	function check() : bool {
		if ($this->fetch_header('https://zoom.us/client/latest/ZoomInstaller.exe'))
			return $this->parse('/\/prod\/([\d\.]+)\/ZoomInstaller\.exe/');
		return false;
	}
}

?>

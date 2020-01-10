<?php

class VLC extends PatchBase {
	function __construct() {
		parent::__construct('VideoLAN', 'VLC media player', 'https://www.videolan.org/vlc/');
	}
	function check() : bool {
		if ($this->fetch('https://www.videolan.org/vlc/download-windows.html'))
			return $this->parse('_//get\.videolan\.org/vlc/[\d\.]+/win32/vlc-([\d\.]+)-win32\.exe_');
		return false;
	}
}

?>

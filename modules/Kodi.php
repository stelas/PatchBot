<?php

class Kodi extends PatchBase {
	function __construct() {
		parent::__construct('XBMC Foundation', 'Kodi', 'https://kodi.tv/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/xbmc/xbmc/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

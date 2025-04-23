<?php

class Mpv extends PatchBase {
	function __construct() {
		parent::__construct('mpv Developers', 'mpv', 'https://mpv.io/installation/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mpv-player/mpv/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class PiHole extends PatchBase {
	function __construct() {
		parent::__construct('Pi-hole LLC', 'Pi-hole', 'https://pi-hole.net/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/pi-hole/pi-hole/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

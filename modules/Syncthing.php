<?php

class Syncthing extends PatchBase {
	function __construct() {
		parent::__construct('Syncthing Foundation', 'Syncthing', 'https://syncthing.net/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/syncthing/syncthing/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Bevy extends PatchBase {
	function __construct() {
		parent::__construct('Bevy Contributors', 'Bevy', 'https://bevyengine.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/bevyengine/bevy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

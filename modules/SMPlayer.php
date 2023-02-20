<?php

class SMPlayer extends PatchBase {
	function __construct() {
		parent::__construct('Ricardo Villalba', 'SMPlayer', 'https://celestia.space/download.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/smplayer-dev/smplayer/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

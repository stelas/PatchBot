<?php

class NewPipe extends PatchBase {
	function __construct() {
		parent::__construct('Team NewPipe', 'NewPipe', 'https://newpipe.net/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/TeamNewPipe/NewPipe/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

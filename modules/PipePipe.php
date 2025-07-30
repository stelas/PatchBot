<?php

class PipePipe extends PatchBase {
	function __construct() {
		parent::__construct('PipePipe Project', 'PipePipe', 'https://pipepipe.dev/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/InfinityLoop1308/PipePipe/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

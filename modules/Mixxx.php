<?php

class Mixxx extends PatchBase {
	function __construct() {
		parent::__construct('Mixxx Development Team', 'Mixxx', 'https://mixxx.org/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mixxxdj/mixxx/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

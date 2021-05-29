<?php

class FPLedit extends PatchBase {
	function __construct() {
		parent::__construct('Manuel Huber', 'FPLedit', 'https://fahrplan.manuelhu.de/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/fpledit/fpledit/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

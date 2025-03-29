<?php

class Resticprofile extends PatchBase {
	function __construct() {
		parent::__construct('Creative Projects', 'resticprofile', 'https://creativeprojects.github.io/resticprofile/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/creativeprojects/resticprofile/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

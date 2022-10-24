<?php

class LibreWolf extends PatchBase {
	function __construct() {
		parent::__construct('LibreWolf Community', 'LibreWolf', 'https://librewolf.net/installation/');
	}
	function check() : bool {
		if ($this->fetch_json('https://gitlab.com/api/v4/projects/32320088/releases'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class GPXSee extends PatchBase {
	function __construct() {
		parent::__construct('Martin Tůma', 'GPXSee', 'https://www.gpxsee.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/tumic0/GPXSee/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

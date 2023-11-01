<?php

class SmartTube extends PatchBase {
	function __construct() {
		parent::__construct('Yuriy L', 'SmartTube', 'https://smarttubeapp.github.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/yuliskov/SmartTube/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

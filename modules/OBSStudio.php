<?php

class OBSStudio extends PatchBase {
	function __construct() {
		parent::__construct('OBS Studio Contributors', 'OBS Studio', 'https://obsproject.com/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/obsproject/obs-studio/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

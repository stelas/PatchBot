<?php

class MediaInfo extends PatchBase {
	function __construct() {
		parent::__construct('MediaArea.net SARL', 'MediaInfo', 'https://mediaarea.net/MediaInfo/Download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/MediaArea/MediaInfo/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

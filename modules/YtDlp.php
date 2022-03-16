<?php

class YtDlp extends PatchBase {
	function __construct() {
		parent::__construct('yt-dlp Authors', 'yt-dlp', 'https://github.com/yt-dlp/yt-dlp');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/yt-dlp/yt-dlp/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

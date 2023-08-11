<?php

class YoutubeDL extends PatchBase {
	function __construct() {
		parent::__construct('youtube-dl Authors', 'youtube-dl', 'http://ytdl-org.github.io/youtube-dl/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ytdl-org/youtube-dl/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

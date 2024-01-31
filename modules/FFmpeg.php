<?php

class FFmpeg extends PatchBase {
	function __construct() {
		parent::__construct('FFmpeg Developers', 'FFmpeg', 'https://ffmpeg.org/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://ffmpeg.org/download.html'))
			return $this->parse('_//ffmpeg\.org/releases/ffmpeg-([\d\.]+)\.tar\.xz_');
		return false;
	}
}

?>

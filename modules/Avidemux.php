<?php

class Avidemux extends PatchBase {
	function __construct() {
		parent::__construct('Mean', 'Avidemux', 'http://avidemux.sourceforge.net/download.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://sourceforge.net/projects/avidemux/best_release.json'))
			return $this->parse_json('filename', '/^\/avidemux\/(.+)\//');
		return false;
	}
}

?>

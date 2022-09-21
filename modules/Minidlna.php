<?php

class Minidlna extends PatchBase {
	function __construct() {
		parent::__construct('Justin Maggard', 'ReadyMedia', 'https://sourceforge.net/projects/minidlna/files/');
	}
	function check() : bool {
		if ($this->fetch_json('https://sourceforge.net/projects/minidlna/best_release.json'))
			return $this->parse_json('filename', '/^\/minidlna\/(.+)\//');
		return false;
	}
}

?>

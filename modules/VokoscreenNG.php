<?php

class VokoscreenNG extends PatchBase {
	function __construct() {
		parent::__construct('Volker Kohaupt', 'vokoscreenNG', 'https://linuxecke.volkoh.de/vokoscreen/vokoscreen-download.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/vkohaupt/vokoscreenNG/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

<?php

class ShredOS extends PatchBase {
	function __construct() {
		parent::__construct('PartialVolume', 'ShredOS', 'https://github.com/PartialVolume/shredos.x86_64');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/PartialVolume/shredos.x86_64/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

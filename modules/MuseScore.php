<?php

class MuseScore extends PatchBase {
	function __construct() {
		parent::__construct('MuseScore BVBA', 'MuseScore', 'https://musescore.org/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/musescore/MuseScore/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

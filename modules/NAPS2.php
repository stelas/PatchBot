<?php

class NAPS2 extends PatchBase {
	function __construct() {
		parent::__construct('NAPS2 Contributors', 'NAPS2', 'https://www.naps2.com/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/cyanfish/naps2/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

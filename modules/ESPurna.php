<?php

class ESPurna extends PatchBase {
	function __construct() {
		parent::__construct('Xose Pérez', 'ESPurna', 'https://github.com/xoseperez/espurna');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/xoseperez/espurna/releases/latest'))
			return $this->parse_json('tag_name', '/github(.+)/');
		return false;
	}
}

?>

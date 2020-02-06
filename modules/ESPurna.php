<?php

class ESPurna extends PatchBase {
	function __construct() {
		parent::__construct('Xose Pérez', 'ESPurna', 'https://github.com/xoseperez/espurna');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/xoseperez/espurna/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

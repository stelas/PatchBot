<?php

class TurboVNC extends PatchBase {
	function __construct() {
		parent::__construct('D. R. Commander', 'TurboVNC', 'https://www.turbovnc.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/TurboVNC/turbovnc/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

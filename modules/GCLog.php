<?php

class GCLog extends PatchBase {
	function __construct() {
		parent::__construct('Steffen Lange', 'Geiger Counter Logger', 'https://www.gclog.de/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/stelas/GCLog/tags', true))
			return $this->parse_json('name');
		return false;
	}
}

?>

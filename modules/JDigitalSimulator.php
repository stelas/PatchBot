<?php

class JDigitalSimulator extends PatchBase {
	function __construct() {
		parent::__construct('Kristian Kraljic', 'JDigitalSimulator', 'https://kra.lc/projects/jdigitalsimulator/download.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/kristian/JDigitalSimulator/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

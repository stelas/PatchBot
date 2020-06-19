<?php

class JDigitalSimulator extends PatchBase {
	function __construct() {
		parent::__construct('Kristian Kraljic', 'JDigitalSimualtor', 'https://kra.lc/projects/jdigitalsimulator/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/kristian/JDigitalSimulator/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

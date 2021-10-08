<?php

class Filius extends PatchBase {
	function __construct() {
		parent::__construct('Stefan Freischlad', 'Filius', 'https://www.lernsoftware-filius.de/Herunterladen');
	}
	function check() : bool {
		if ($this->fetch_json('https://gitlab.com/api/v4/projects/18855527/repository/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

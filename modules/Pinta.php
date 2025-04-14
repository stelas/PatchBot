<?php

class Pinta extends PatchBase {
	function __construct() {
		parent::__construct('Jonathan Pobst', 'Pinta', 'https://www.pinta-project.com/releases/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/PintaProject/Pinta/releases/latest'))
			return $this->parse_json('name');
		return false;
	}
}

?>

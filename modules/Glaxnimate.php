<?php

class Glaxnimate extends PatchBase {
	function __construct() {
		parent::__construct('Mattia Basaglia', 'Glaxnimate', 'https://glaxnimate.org/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://invent.kde.org/api/v4/projects/graphics%2Fglaxnimate/repository/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

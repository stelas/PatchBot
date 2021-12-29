<?php

class PlantUML extends PatchBase {
	function __construct() {
		parent::__construct('Arnaud Roques', 'PlantUML', 'https://plantuml.com/en/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/plantuml/plantuml/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Modelio extends PatchBase {
	function __construct() {
		parent::__construct('Modeliosoft', 'Modelio', 'https://www.modelio.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ModelioOpenSource/Modelio/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Stellarium extends PatchBase {
	function __construct() {
		parent::__construct('Fabien Chereau', 'Stellarium', 'https://stellarium.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Stellarium/stellarium/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

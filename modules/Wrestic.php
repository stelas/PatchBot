<?php

class Wrestic extends PatchBase {
	function __construct() {
		parent::__construct('Alvaro Garcia', 'Wrestic', 'https://wrestic.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/alvaro17f/wrestic/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

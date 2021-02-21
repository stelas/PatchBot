<?php

class Bootstrap extends PatchBase {
	function __construct() {
		parent::__construct('Bootstrap Team', 'Bootstrap', 'https://getbootstrap.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/twbs/bootstrap/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

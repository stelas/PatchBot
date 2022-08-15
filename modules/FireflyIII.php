<?php

class FireflyIII extends PatchBase {
	function __construct() {
		parent::__construct('James Cole', 'Firefly III', 'https://www.firefly-iii.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/firefly-iii/firefly-iii/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Homepage extends PatchBase {
	function __construct() {
		parent::__construct('Tomer Shvueli', 'Homepage', 'https://github.com/tomershvueli/homepage');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/tomershvueli/homepage/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

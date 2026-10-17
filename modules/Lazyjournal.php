<?php

class Lazyjournal extends PatchBase {
	function __construct() {
		parent::__construct('Alex Kup', 'lazyjournal', 'https://github.com/Lifailon/lazyjournal');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Lifailon/lazyjournal/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

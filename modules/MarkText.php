<?php

class MarkText extends PatchBase {
	function __construct() {
		parent::__construct('Luo Ran', 'MarkText', 'https://marktext.me/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/marktext/marktext/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

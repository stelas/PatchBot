<?php

class MdBook extends PatchBase {
	function __construct() {
		parent::__construct('Mathieu David', 'mdBook', 'https://rust-lang.github.io/mdBook/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/rust-lang/mdBook/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

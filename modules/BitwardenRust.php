<?php

class BitwardenRust extends PatchBase {
	function __construct() {
		parent::__construct('Daniel García', 'Bitwarden in Rust', 'https://github.com/dani-garcia/bitwarden_rs');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/dani-garcia/bitwarden_rs/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

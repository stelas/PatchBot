<?php

class VSCodium extends PatchBase {
	function __construct() {
		parent::__construct('Peter Squicciarini', 'VSCodium', 'https://vscodium.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/VSCodium/vscodium/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

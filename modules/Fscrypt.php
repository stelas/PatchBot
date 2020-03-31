<?php

class Fscrypt extends PatchBase {
	function __construct() {
		parent::__construct('Joe Richey', 'fscrypt', 'https://github.com/google/fscrypt');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/google/fscrypt/releases', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

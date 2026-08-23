<?php

class VeraCrypt extends PatchBase {
	function __construct() {
		parent::__construct('IDRIX', 'VeraCrypt', 'https://veracrypt.io/en/Downloads.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/veracrypt/VeraCrypt/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

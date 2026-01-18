<?php

class NormCap extends PatchBase {
	function __construct() {
		parent::__construct('dynobo', 'NormCap', 'https://dynobo.github.io/normcap/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/dynobo/normcap/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

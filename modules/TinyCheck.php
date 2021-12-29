<?php

class TinyCheck extends PatchBase {
	function __construct() {
		parent::__construct('Kaspersky Lab', 'TinyCheck', 'https://github.com/KasperskyLab/TinyCheck/wiki');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/KasperskyLab/TinyCheck/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

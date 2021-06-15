<?php

class Publii extends PatchBase {
	function __construct() {
		parent::__construct('TidyCustoms', 'Publii', 'https://getpublii.com/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/GetPublii/Publii/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

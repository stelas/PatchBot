<?php

class Duplicati extends PatchBase {
	function __construct() {
		parent::__construct('Duplicati Team', 'Duplicati', 'https://www.duplicati.com/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/duplicati/duplicati/releases/latest'))
			return $this->parse_json('tag_name', '/(.+)_stable/');
		return false;
	}
}

?>

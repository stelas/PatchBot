<?php

class CAdvisor extends PatchBase {
	function __construct() {
		parent::__construct('Google', 'cAdvisor', 'https://github.com/google/cadvisor');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/google/cadvisor/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

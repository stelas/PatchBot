<?php

class Lapce extends PatchBase {
	function __construct() {
		parent::__construct('Dongdong Zhou', 'Lapce', 'https://lapce.dev/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/lapce/lapce/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class LocalSend extends PatchBase {
	function __construct() {
		parent::__construct('Tien Do Nam', 'LocalSend', 'https://localsend.org/#/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/localsend/localsend/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

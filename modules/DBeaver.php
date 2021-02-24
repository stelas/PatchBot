<?php

class DBeaver extends PatchBase {
	function __construct() {
		parent::__construct('DBeaver Corp', 'DBeaver', 'https://dbeaver.io/download/');
		$this->patch->setBranch('Community Edition');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/dbeaver/dbeaver/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

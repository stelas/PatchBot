<?php

class RustDesk extends PatchBase {
	function __construct() {
		parent::__construct('Purslane Ltd', 'RustDesk', 'https://rustdesk.com/');
		$this->patch->setBranch('Desktop');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/rustdesk/rustdesk/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

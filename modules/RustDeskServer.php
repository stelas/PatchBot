<?php

class RustDeskServer extends PatchBase {
	function __construct() {
		parent::__construct('Purslane Ltd', 'RustDesk', 'https://rustdesk.com/');
		$this->patch->setBranch('Server');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/rustdesk/rustdesk-server/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

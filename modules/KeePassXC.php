<?php

class KeePassXC extends PatchBase {
	function __construct() {
		parent::__construct('KeePassXC Team', 'KeePassXC', 'https://keepassxc.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/keepassxreboot/keepassxc/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

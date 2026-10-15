<?php

class KeyStoreExplorer extends PatchBase {
	function __construct() {
		parent::__construct('Kai Kramer', 'KeyStore Explorer', 'https://keystore-explorer.org/downloads.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/kaikramer/keystore-explorer/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

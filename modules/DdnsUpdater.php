<?php

class DdnsUpdater extends PatchBase {
	function __construct() {
		parent::__construct('Quentin McGaw', 'DDNS Updater', 'https://github.com/qdm12/ddns-updater');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/qdm12/ddns-updater/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

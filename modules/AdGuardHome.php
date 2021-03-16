<?php

class AdGuardHome extends PatchBase {
	function __construct() {
		parent::__construct('AdGuard Software', 'AdGuard Home', 'https://adguard.com/de/adguard-home/overview.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/AdguardTeam/AdGuardHome/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

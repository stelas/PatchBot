<?php

class OpenWrt extends PatchBase {
	function __construct() {
		parent::__construct('OpenWrt Developers', 'OpenWrt', 'https://openwrt.org/downloads');
	}
	function check() : bool {
		if ($this->fetch_json('https://downloads.openwrt.org/.versions.json'))
			return $this->parse_json('stable_version');
		return false;
	}
}

?>

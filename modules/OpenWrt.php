<?php

class OpenWrt extends PatchBase {
	function __construct() {
		parent::__construct('OpenWrt Developers', 'OpenWrt', 'https://openwrt.org/downloads');
	}
	function check() : bool {
		if ($this->fetch('https://openwrt.org/start'))
			return $this->parse('/<strong>Current Stable Release - OpenWrt ([\d\.]+)<\/strong>/');
		return false;
	}
}

?>

<?php

class ZeroTierOne extends PatchBase {
	function __construct() {
		parent::__construct('ZeroTier Inc.', 'ZeroTier', 'https://www.zerotier.com/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/zerotier/ZeroTierOne/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

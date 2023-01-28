<?php

class WinBtrfs extends PatchBase {
	function __construct() {
		parent::__construct('Mark Harmstone', 'WinBtrfs', 'https://github.com/maharmstone/btrfs');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/maharmstone/btrfs/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

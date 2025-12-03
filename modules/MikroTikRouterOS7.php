<?php

class MikroTikRouterOS7 extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('v7 Stable');
	}
	function check() : bool {
		if ($this->fetch('https://upgrade.mikrotik.com/routeros/NEWESTa7.stable')) {
			return $this->parse('/([\d\.]+) [\d]+/');
		}
		return false;
	}
}

?>

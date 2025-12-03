<?php

class MikroTikRouterOS6 extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('v6 Stable');
	}
	function check() : bool {
		if ($this->fetch('https://upgrade.mikrotik.com/routeros/NEWESTa6.stable')) {
			return $this->parse('/([\d\.]+) [\d]+/');
		}
		return false;
	}
}

?>

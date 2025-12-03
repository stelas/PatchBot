<?php

class MikroTikRouterOS6LTS extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('v6 Long-term');
	}
	function check() : bool {
		if ($this->fetch('https://upgrade.mikrotik.com/routeros/NEWESTa6.long-term')) {
			return $this->parse('/([\d\.]+) [\d]+/');
		}
		return false;
	}
}

?>

<?php

class MikroTikRouterOS7LTS extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('v7 Long-term');
	}
	function check() : bool {
		if ($this->fetch('https://upgrade.mikrotik.com/routeros/NEWESTa7.long-term')) {
			return $this->parse('/([\d\.]+) [\d]+/');
		}
		return false;
	}
}

?>

<?php

class MikroTikRouterOS6LTS extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('v6 Long-term');
	}
	function check() : bool {
		if ($this->fetch('https://mikrotik.com/download')) {
			$this->str_crop('id="routeros"', '</thead>');
			return $this->parse('/<th>([\d\.]+) Long-term<\/th>/');
		}
		return false;
	}
}

?>

<?php

class MikroTikRouterOS7 extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('v7 Stable');
	}
	function check() : bool {
		if ($this->fetch('https://mikrotik.com/download')) {
			$this->str_crop('id="routeros7"', '</thead>');
			return $this->parse('/<th>([\d\.]+) Stable<\/th>/');
		}
		return false;
	}
}

?>

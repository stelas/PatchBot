<?php

class MikroTikRouterOSLTS extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('Long-term');
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

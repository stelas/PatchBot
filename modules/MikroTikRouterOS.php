<?php

class MikroTikRouterOS extends PatchBase {
	function __construct() {
		parent::__construct('MikroTik', 'RouterOS', 'https://mikrotik.com/download');
		$this->patch->setBranch('Stable');
	}
	function check() : bool {
		if ($this->fetch('https://mikrotik.com/download')) {
			$this->str_crop('id="routeros"', '</thead>');
			return $this->parse('/<th>([\d\.]+) Stable<\/th>/');
		}
		return false;
	}
}

?>

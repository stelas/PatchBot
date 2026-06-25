<?php

class BCompare5 extends PatchBase {
	function __construct() {
		parent::__construct('Scooter Software Inc.', 'Beyond Compare', 'https://www.scootersoftware.com/download');
		$this->patch->setBranch('5');
	}
	function check() : bool {
		if ($this->fetch('https://www.scootersoftware.com/checkupdates.php?product=bc5&minor=1&maint=7&auth=30.15&build=31736&edition=prodebug&cpuarch=x86_64&platform=win32&lang=silentC'))
			return $this->parse('/Version <b>([\d\.]+ build \d+)<\/b>/');
		return false;
	}
}

?>

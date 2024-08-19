<?php

class BCompare5 extends PatchBase {
	function __construct() {
		parent::__construct('Scooter Software Inc.', 'Beyond Compare', 'https://www.scootersoftware.com/download');
		$this->patch->setBranch('5');
	}
	function check() : bool {
		if ($this->fetch('https://www.scootersoftware.com/checkupdates.php?product=bc5'))
			return $this->parse('/Version <b>([\d\.]+ build \d+)<\/b>/');
		return false;
	}
}

?>

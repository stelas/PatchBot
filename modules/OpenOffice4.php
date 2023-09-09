<?php

class OpenOffice4 extends PatchBase {
	function __construct() {
		parent::__construct('Apache Foundation', 'OpenOffice', 'http://www.openoffice.org/download/index.html');
		$this->patch->setBranch('4.0');
	}
	function check() : bool {
		if ($this->fetch_xml('https://ooo-updates.apache.org/aoo40/check.Update'))
			return $this->parse_xml('(//inst:version)[1]');
		return false;
	}
}

?>

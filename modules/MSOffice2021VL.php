<?php

class MSOffice2021VL extends PatchBase {
	function __construct() {
		parent::__construct('Microsoft', 'Office 2021', 'https://docs.microsoft.com/en-us/officeupdates/update-history-office-2021#volume-licensed-versions-of-office-ltsc-2021');
		$this->patch->setBranch('Volume License');
	}
	function check() : bool {
		if ($this->fetch('https://docs.microsoft.com/en-us/officeupdates/update-history-office-2021')) {
			$this->str_crop('volume-licensed-versions-of-office-ltsc-2021', '</table>');
			return $this->parse('/Version ([\d]+ \(Build [\d\.]+\))/');
		}
		return false;
	}
}

?>

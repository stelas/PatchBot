<?php

class MSOffice2024VL extends PatchBase {
	function __construct() {
		parent::__construct('Microsoft', 'Office 2024', 'https://docs.microsoft.com/en-us/officeupdates/update-history-office-2024#volume-licensed-versions-of-office-ltsc-2024');
		$this->patch->setBranch('Volume License');
	}
	function check() : bool {
		if ($this->fetch('https://docs.microsoft.com/en-us/officeupdates/update-history-office-2024')) {
			$this->str_crop('volume-licensed-versions-of-office-ltsc-2024', '</table>');
			return $this->parse('/Version ([\d]+ \(Build [\d\.]+\))/');
		}
		return false;
	}
}

?>

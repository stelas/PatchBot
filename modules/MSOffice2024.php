<?php

class MSOffice2024 extends PatchBase {
	function __construct() {
		parent::__construct('Microsoft', 'Office 2024', 'https://docs.microsoft.com/en-us/officeupdates/update-history-office-2024#retail-versions-of-office-2024');
		$this->patch->setBranch('Retail');
	}
	function check() : bool {
		if ($this->fetch('https://docs.microsoft.com/en-us/officeupdates/update-history-office-2024')) {
			$this->str_crop('retail-versions-of-office-2024', '</table>');
			return $this->parse('/Version ([\d]+ \(Build [\d\.]+\))/');
		}
		return false;
	}
}

?>

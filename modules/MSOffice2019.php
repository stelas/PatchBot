<?php

class MSOffice2019 extends PatchBase {
	function __construct() {
		parent::__construct('Microsoft', 'Office 2019', 'https://docs.microsoft.com/en-us/OfficeUpdates/update-history-office-2019#retail-versions-of-office-2016-c2r-and-office-2019');
	}
	function check() : bool {
		if ($this->fetch('https://docs.microsoft.com/en-us/OfficeUpdates/update-history-office-2019')) {
			$this->str_crop('retail-versions-of-office-2016-c2r-and-office-2019', '</table>');
			return $this->parse('/Version ([\d]+ \(Build [\d\.]+\))/');
		}
		return false;
	}
}

?>

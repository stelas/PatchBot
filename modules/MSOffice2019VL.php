<?php

class MSOffice2019VL extends PatchBase {
	function __construct() {
		parent::__construct('Microsoft', 'Office 2019 VL', 'https://docs.microsoft.com/en-us/OfficeUpdates/update-history-office-2019#volume-licensed-versions-of-office-2019');
	}
	function check() : bool {
		if ($this->fetch('https://docs.microsoft.com/en-us/OfficeUpdates/update-history-office-2019')) {
			$this->str_crop('volume-licensed-versions-of-office-2019', '</table>');
			return $this->parse('/Version ([\d]+ \(Build [\d\.]+\))/');
		}
		return false;
	}
}

?>

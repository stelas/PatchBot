<?php

class DecentraleyesChrome extends PatchBase {
	function __construct() {
		parent::__construct('Thomas Rientjes', 'Decentraleyes', 'https://chrome.google.com/webstore/detail/decentraleyes/ldpochfccmkkmhdbclfhpagapcfdljkj');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/decentraleyes/ldpochfccmkkmhdbclfhpagapcfdljkj'))
			return $this->parse('/\\\"version\\\": \\\"([\d\.]+)\\\"/');
		return false;
	}
}

?>

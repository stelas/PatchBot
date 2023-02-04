<?php

class EMClient extends PatchBase {
	function __construct() {
		parent::__construct('eM Client Inc.', 'eM Client', 'https://www.emclient.com/download?lang=en');
	}
	function check() : bool {
		if ($this->fetch_header('https://www.emclient.com/dist/latest/setup.msi'))
			return $this->parse('/filename=emclient-v([\d\.]+)\.msi/');
		return false;
	}
}

?>

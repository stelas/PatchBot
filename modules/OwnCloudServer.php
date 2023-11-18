<?php

class OwnCloudServer extends PatchBase {
	function __construct() {
		parent::__construct('ownCloud GmbH', 'ownCloud Server', 'https://owncloud.com/download-server/');
	}
	function check() : bool {
		if ($this->fetch('https://owncloud.com/changelog/server/'))
			return $this->parse('/Changelog for ([\d\.]+)/');
		return false;
	}
}

?>

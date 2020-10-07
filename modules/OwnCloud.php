<?php

class OwnCloud extends PatchBase {
	function __construct() {
		parent::__construct('ownCloud GmbH', 'ownCloud', 'https://owncloud.com/download-server/');
	}
	function check() : bool {
		if ($this->fetch('https://owncloud.com/download-server/'))
			return $this->parse('/Version: <strong>ownCloud Server ([\d\.]+)<\/strong>/');
		return false;
	}
}

?>

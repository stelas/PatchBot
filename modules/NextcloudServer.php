<?php

class NextcloudServer extends PatchBase {
	function __construct() {
		parent::__construct('Nextcloud GmbH', 'Nextcloud Server', 'https://nextcloud.com/install/');
	}
	function check() : bool {
		if ($this->fetch('https://nextcloud.com/install/'))
			return $this->parse('_//download\.nextcloud\.com/server/releases/nextcloud-([\d\.]+)\.zip_');
		return false;
	}
}

?>

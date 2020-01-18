<?php

class Nextcloud extends PatchBase {
	function __construct() {
		parent::__construct('Nextcloud GmbH', 'Nextcloud', 'https://nextcloud.com/');
	}
	function check() : bool {
		if ($this->fetch('https://nextcloud.com/install/'))
			return $this->parse('_https://download.nextcloud.com/server/releases/nextcloud-([\d\.]+)\.zip_');
		return false;
	}
}

?>

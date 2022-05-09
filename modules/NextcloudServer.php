<?php

class NextcloudServer extends PatchBase {
	function __construct() {
		parent::__construct('Nextcloud GmbH', 'Nextcloud Server', 'https://nextcloud.com/install/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/nextcloud/server/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

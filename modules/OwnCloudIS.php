<?php

class OwnCloudIS extends PatchBase {
	function __construct() {
		parent::__construct('ownCloud GmbH', 'ownCloud Server', 'https://owncloud.com/download-server/');
		$this->patch->setBranch('Infinite Scale');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/owncloud/ocis/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

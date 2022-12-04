<?php

class OwnCloudWeb extends PatchBase {
	function __construct() {
		parent::__construct('ownCloud GmbH', 'ownCloud Server', 'https://owncloud.com/download-server/');
		$this->patch->setBranch('Web');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/owncloud/web/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

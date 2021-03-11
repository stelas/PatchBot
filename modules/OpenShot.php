<?php

class OpenShot extends PatchBase {
	function __construct() {
		parent::__construct('Jonathan Thomas', 'OpenShot Video Editor', 'https://www.openshot.org/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/OpenShot/openshot-qt/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

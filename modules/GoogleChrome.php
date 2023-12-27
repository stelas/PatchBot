<?php

class GoogleChrome extends PatchBase {
	function __construct() {
		parent::__construct('Google', 'Chrome', 'https://www.google.de/chrome/');
	}
	function check() : bool {
		if ($this->fetch_json('https://versionhistory.googleapis.com/v1/chrome/platforms/win64/channels/stable/versions'))
			return $this->parse_json('version');
		return false;
	}
}

?>

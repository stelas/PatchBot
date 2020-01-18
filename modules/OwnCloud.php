<?php

class OwnCloud extends PatchBase {
	function __construct() {
		parent::__construct('ownCloud GmbH', 'ownCloud', 'https://owncloud.org/');
	}
	function check() : bool {
		if ($this->fetch('https://owncloud.org/download/'))
			return $this->parse('/<td>Production<\/td>[\s]*<td>([\d\.]+)<\/td>/');
		return false;
	}
}

?>

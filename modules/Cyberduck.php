<?php

class Cyberduck extends PatchBase {
	function __construct() {
		parent::__construct('iterate GmbH', 'Cyberduck', 'https://cyberduck.io/download/');
	}
	function check() : bool {
		if ($this->fetch('https://version.cyberduck.io/changelog.rss'))
			return $this->parse('/sparkle:shortVersionString="([\d.]+)"/');
		return false;
	}
}

?>

<?php

class HxD extends PatchBase {
	function __construct() {
		parent::__construct('Maël Hörz', 'HxD', 'https://mh-nexus.de/hxd/');
	}
	function check() : bool {
		if ($this->fetch('https://mh-nexus.de/en/hxd/changelog.php'))
			return $this->parse('/id="v_([\d\.]+)"/');
		return false;
	}
}

?>

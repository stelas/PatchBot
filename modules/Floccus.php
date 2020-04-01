<?php

class Floccus extends PatchBase {
	function __construct() {
		parent::__construct('Marcel Klehr', 'floccus', 'https://addons.mozilla.org/en-US/firefox/addon/floccus/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/floccus/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>

<?php

class Duplicati extends PatchBase {
	function __construct() {
		parent::__construct('Duplicati Team', 'Duplicati', 'https://www.duplicati.com/download');
	}
	function check() : bool {
		if ($this->fetch('https://updates.duplicati.com/beta/latest-installers.js'))
			return $this->parse('/"version": "([\d\.]+)"/');
		return false;
	}
}

?>

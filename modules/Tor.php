<?php

class Tor extends PatchBase {
	function __construct() {
		parent::__construct('Tor Project', 'Tor', 'https://www.torproject.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.torproject.org/download/tor/'))
			return $this->parse('_//dist\.torproject\.org/tor-([\d\.]+)\.tar\.gz_');
		return false;
	}
}

?>

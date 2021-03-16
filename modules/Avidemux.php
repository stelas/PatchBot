<?php

class Avidemux extends PatchBase {
	function __construct() {
		parent::__construct('Mean', 'Avidemux', 'http://avidemux.sourceforge.net/download.html');
	}
	function check() : bool {
		if ($this->fetch('http://avidemux.sourceforge.net/download.html'))
			return $this->parse('/avidemux_([\d\.]+)\.tar\.gz/');
		return false;
	}
}

?>

<?php

class Grml extends PatchBase {
	function __construct() {
		parent::__construct('Michael Prokop', 'Grml', 'https://grml.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://grml.org/download/'))
			return $this->parse('/name="version" value="([\d\.]+)"/');
		return false;
	}
}

?>

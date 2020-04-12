<?php

class TotalCommander extends PatchBase {
	function __construct() {
		parent::__construct('Christian Ghisler', 'Total Commander', 'https://www.ghisler.com/download.htm');
	}
	function check() : bool {
		if ($this->fetch('https://www.ghisler.com/download.htm'))
			return $this->parse('/version ([\d\.a-z]+) of/');
		return false;
	}
}

?>

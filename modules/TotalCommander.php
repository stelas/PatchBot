<?php

class TotalCommander extends PatchBase {
	function __construct() {
		parent::__construct('Christian Ghisler', 'Total Commander', 'https://www.ghisler.com/');
	}
	function check() : bool {
		if ($this->fetch('https://www.ghisler.com/download.htm'))
			return $this->parse('/version ([\d\w\.]+) of/');
		return false;
	}
}

?>

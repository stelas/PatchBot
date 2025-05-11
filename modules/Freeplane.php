<?php

class Freeplane extends PatchBase {
	function __construct() {
		parent::__construct('Freeplane Team', 'Freeplane', 'https://docs.freeplane.org/');
	}
	function check() : bool {
		if ($this->fetch('https://www.freeplane.org/info/history/history_en.txt')) {
			$this->str_extract(1);
			return $this->parse('/^([\d\.]+)/m');
		}
		return false;
	}
}

?>

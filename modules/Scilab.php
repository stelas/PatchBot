<?php

class Scilab extends PatchBase {
	function __construct() {
		parent::__construct('ESI Group', 'Scilab', 'https://www.scilab.org/download');
	}
	function check() : bool {
		if ($this->fetch('https://www.scilab.org/download', false))
			return $this->parse('/\/download\/([\d\.]+)/');
		return false;
	}
}

?>

<?php

class ReactOS extends PatchBase {
	function __construct() {
		parent::__construct('ReactOS Team', 'ReactOS', 'https://reactos.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://reactos.org/'))
			return $this->parse('/Download ReactOS ([\d\.]+)/');
		return false;
	}
}

?>

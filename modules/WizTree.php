<?php

class WizTree extends PatchBase {
	function __construct() {
		parent::__construct('Antibody Software', 'WizTree', 'https://diskanalyzer.com/download');
	}
	function check() : bool {
		if ($this->fetch('http://antibody-software.com/files/wiztreeversion.php'))
			return $this->parse('/VERSION=([\d\.]+)/');
		return false;
	}
}

?>

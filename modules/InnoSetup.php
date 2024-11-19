<?php

class InnoSetup extends PatchBase {
	function __construct() {
		parent::__construct('Jordan Russell', 'Inno Setup', 'https://jrsoftware.org/isinfo.php');
	}
	function check() : bool {
		if ($this->fetch('https://jrsoftware.org/isdl.php'))
			return $this->parse('/>innosetup-([\d\.]+).exe</');
		return false;
	}
}

?>

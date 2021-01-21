<?php

class ClonezillaStable extends PatchBase {
	function __construct() {
		parent::__construct('NCHC Free Software Lab', 'Clonezilla', 'https://clonezilla.org/downloads.php');
		$this->patch->setBranch('Stable');
	}
	function check() : bool {
		if ($this->fetch('https://clonezilla.org/downloads.php'))
			return $this->parse('/<b>stable<\/b>\s*-\s*<font color=red>([\d\.-]+)/');
		return false;
	}
}

?>

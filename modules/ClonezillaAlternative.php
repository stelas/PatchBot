<?php

class ClonezillaAlternative extends PatchBase {
	function __construct() {
		parent::__construct('NCHC Free Software Lab', 'Clonezilla', 'https://clonezilla.org/');
		$this->patch->setBranch('Alternative');
	}
	function check() : bool {
		if ($this->fetch('https://clonezilla.org/downloads.php'))
			return $this->parse('/<b>alternative stable<\/b>[\s]*-[\s]*<font color=red>([\d]+-[a-z]+)/');
		return false;
	}
}

?>

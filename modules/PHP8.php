<?php

class PHP8 extends PatchBase {
	function __construct() {
		parent::__construct('PHP Group', 'PHP', 'https://www.php.net/downloads');
		$this->patch->setBranch('8');
	}
	function check() : bool {
		if ($this->fetch('https://www.php.net/ChangeLog-8.php'))
			return $this->parse('/<h3>Version ([\d\.]+)<\/h3>/');
		return false;
	}
}

?>

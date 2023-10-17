<?php

class StrawberryPerl extends PatchBase {
	function __construct() {
		parent::__construct('Adam Kennedy', 'Strawberry Perl', 'https://strawberryperl.com/');
	}
	function check() : bool {
		if ($this->fetch('https://strawberryperl.com/'))
			return $this->parse('_/strawberry-perl-([\d\.]+)-\d+bit\.msi_');
		return false;
	}
}

?>

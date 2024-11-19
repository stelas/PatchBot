<?php

class APlanX extends PatchBase {
	function __construct() {
		parent::__construct('braintool', 'A-Plan X', 'https://www.braintool.com/patches-x/');
	}
	function check() : bool {
		if ($this->fetch('https://www.braintool.com/patch-a-plan-x-historie/'))
			return $this->parse('/<strong>Release ([\d\.]+) /');
		return false;
	}
}

?>

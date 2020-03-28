<?php

class CrossOver extends PatchBase {
	function __construct() {
		parent::__construct('CodeWeavers', 'CrossOver', 'https://www.codeweavers.com/products');
	}
	function check() : bool {
		if ($this->fetch('https://www.codeweavers.com/products/more-information/changelog'))
			return $this->parse('/<b>([\d\.]+)<\/b>[\s]*CrossOver/');
		return false;
	}
}

?>

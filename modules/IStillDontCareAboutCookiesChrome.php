<?php

class IStillDontCareAboutCookiesChrome extends PatchBase {
	function __construct() {
		parent::__construct('Guus van der Meer', 'I still don\'t care about cookies', 'https://chromewebstore.google.com/detail/i-still-dont-care-about-c/edibdbjcniadpccecjdfdjjppcpchdlm');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chromewebstore.google.com/detail/i-still-dont-care-about-c/edibdbjcniadpccecjdfdjjppcpchdlm'))
			return $this->parse('/<div class="nBZElf">([\d\.]+)<\/div>/');
		return false;
	}
}

?>

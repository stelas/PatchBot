<?php

class TechnitiumDNSServer extends PatchBase {
	function __construct() {
		parent::__construct('Shreyas Zare', 'Technitium DNS Server', 'https://technitium.com/dns/');
	}
	function check() : bool {
		if ($this->fetch('https://technitium.com/dns/'))
			return $this->parse('/>Version ([\d\.]+)</');
		return false;
	}
}

?>

<?php

class Dnsmasq extends PatchBase {
	function __construct() {
		parent::__construct('Simon Kelley', 'Dnsmasq', 'http://www.thekelleys.org.uk/dnsmasq/doc.html');
	}
	function check() : bool {
		if ($this->fetch('http://www.thekelleys.org.uk/dnsmasq/'))
			return $this->parse('/"LATEST_IS_([\d\.]+)"/');
		return false;
	}
}

?>

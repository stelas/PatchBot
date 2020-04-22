<?php

class CitrixReceiverLTSR extends PatchBase {
	function __construct() {
		parent::__construct('Citrix', 'Receiver', 'https://www.citrix.com/downloads/citrix-receiver/windows-ltsr/');
		$this->patch->setBranch('LTSR');
	}
	function check() : bool {
		if ($this->fetch('https://www.citrix.com/downloads/citrix-receiver/windows-ltsr/'))
			return $this->parse('/\/receiver-for-windows-ltsr-latest.html">Receiver ([\d\.]+) for Windows/');
		return false;
	}
}

?>

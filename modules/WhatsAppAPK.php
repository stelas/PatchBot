<?php

class WhatsAppAPK extends PatchBase {
	function __construct() {
		parent::__construct('WhatsApp LLC', 'WhatsApp', 'https://www.whatsapp.com/android');
		$this->patch->setBranch('Android');
	}
	function check() : bool {
		if ($this->fetch('https://www.whatsapp.com/android'))
			return $this->parse('/\(Version ([\d\.]+)\)/');
		return false;
	}
}

?>

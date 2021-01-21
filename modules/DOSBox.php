<?php

class DOSBox extends PatchBase {
	function __construct() {
		parent::__construct('DOSBox Team', 'DOSBox', 'https://www.dosbox.com/download.php?main=1');
	}
	function check() : bool {
		if ($this->fetch('https://www.dosbox.com/download.php?main=1'))
			return $this->parse('/Latest version:\s+<a class="bold" href="download\.php\?main=1">([\d\.-]+)<\/a>/');
		return false;
	}
}

?>

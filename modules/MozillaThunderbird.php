<?php

class MozillaThunderbird extends PatchBase {
	function __construct() {
		parent::__construct('Mozilla', 'Thunderbird', 'https://www.thunderbird.net/en-US/thunderbird/all/');
	}
	function check() : bool {
		if ($this->fetch('https://www.thunderbird.net/en-US/thunderbird/all/'))
			return $this->parse('_//download\.mozilla\.org/\?product=thunderbird-([\d\.]+)(esr)?(-SSL)?&(amp;)?os=win&(amp;)?lang=en-US_');
		return false;
	}
}

?>

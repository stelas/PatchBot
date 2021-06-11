<?php

class FreePascal extends PatchBase {
	function __construct() {
		parent::__construct('Florian Klämpfl & Free Pascal Team', 'Free Pascal', 'https://www.freepascal.org/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.freepascal.org/download.html'))
			return $this->parse('/latest release is <b>([\d\.]+)<\/b>/');
		return false;
	}
}

?>

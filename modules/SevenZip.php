<?php

class SevenZip extends PatchBase {
	function __construct() {
		parent::__construct('Igor Pavlov', '7-Zip', 'https://www.7-zip.org/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.7-zip.org/download.html'))
			return $this->parse('/Download 7-Zip ([\d\.]+) \([\d-]+\)/');
		return false;
	}
}

?>

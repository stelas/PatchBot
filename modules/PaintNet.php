<?php

class PaintNet extends PatchBase {
	function __construct() {
		parent::__construct('dotPDN LLC', 'Paint.NET', 'https://www.getpaint.net/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.getpaint.net/'))
			return $this->parse('/<b>paint\.net\s+([\d\.]+)<\/b>/');
		return false;
	}
}

?>

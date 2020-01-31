<?php

class IrfanView extends PatchBase {
	function __construct() {
		parent::__construct('Irfan Skiljan', 'IrfanView', 'https://www.irfanview.com/');
	}
	function check() : bool {
		if ($this->fetch('https://www.irfanview.com/64bit.htm'))
			return $this->parse('/\(Version ([\d\.]+),/');
		return false;
	}
}

?>

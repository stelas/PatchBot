<?php

class IPXE extends PatchBase {
	function __construct() {
		parent::__construct('Michael Brown', 'iPXE', 'https://ipxe.org/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/ipxe/ipxe/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

<?php

class CoreDNS extends PatchBase {
	function __construct() {
		parent::__construct('Miek Gieben', 'CoreDNS', 'https://coredns.io/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/coredns/coredns/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

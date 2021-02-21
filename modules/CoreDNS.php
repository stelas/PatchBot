<?php

class CoreDNS extends PatchBase {
	function __construct() {
		parent::__construct('Miek Gieben', 'CoreDNS', 'https://coredns.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/coredns/coredns/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class DNSCryptProxy extends PatchBase {
	function __construct() {
		parent::__construct('Frank Denis', 'dnscrypt-proxy', 'https://github.com/DNSCrypt/dnscrypt-proxy');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/DNSCrypt/dnscrypt-proxy/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

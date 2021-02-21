<?php

class DNSCryptProxy extends PatchBase {
	function __construct() {
		parent::__construct('Frank Denis', 'dnscrypt-proxy', 'https://github.com/DNSCrypt/dnscrypt-proxy');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/DNSCrypt/dnscrypt-proxy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

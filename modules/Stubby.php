<?php

class Stubby extends PatchBase {
	function __construct() {
		parent::__construct('NLnet Labs', 'Stubby', 'https://dnsprivacy.org/dns_privacy_daemon_-_stubby/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/getdnsapi/stubby/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

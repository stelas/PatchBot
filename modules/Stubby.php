<?php

class Stubby extends PatchBase {
	function __construct() {
		parent::__construct('NLnet Labs', 'Stubby', 'https://dnsprivacy.org/wiki/x/JYAT');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/getdnsapi/stubby/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

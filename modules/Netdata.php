<?php

class Netdata extends PatchBase {
	function __construct() {
		parent::__construct('Netdata Inc.', 'Netdata', 'https://www.netdata.cloud/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/netdata/netdata/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

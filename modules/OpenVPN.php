<?php

class OpenVPN extends PatchBase {
	function __construct() {
		parent::__construct('OpenVPN Inc.', 'OpenVPN', 'https://openvpn.net/community-downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/OpenVPN/openvpn/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

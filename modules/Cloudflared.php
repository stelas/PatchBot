<?php

class Cloudflared extends PatchBase {
	function __construct() {
		parent::__construct('Cloudflare Inc.', 'Cloudflare Tunnel client', 'https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/cloudflare/cloudflared/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

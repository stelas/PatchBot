<?php

class UptimeKuma extends PatchBase {
	function __construct() {
		parent::__construct('Louis Lam', 'Uptime Kuma', 'https://uptime.kuma.pet/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/louislam/uptime-kuma/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

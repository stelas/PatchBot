<?php

class Caddy extends PatchBase {
	function __construct() {
		parent::__construct('Matthew Holt', 'Caddy', 'https://caddyserver.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/caddyserver/caddy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

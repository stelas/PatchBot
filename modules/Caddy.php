<?php

class Caddy extends PatchBase {
	function __construct() {
		parent::__construct('Matthew Holt', 'Caddy', 'https://caddyserver.com/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/caddyserver/caddy/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

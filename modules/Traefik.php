<?php

class Traefik extends PatchBase {
	function __construct() {
		parent::__construct('Containous', 'Traefik', 'https://traefik.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/containous/traefik/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

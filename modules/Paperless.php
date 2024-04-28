<?php

class Paperless extends PatchBase {
	function __construct() {
		parent::__construct('Daniel Quinn & Jonas Winkler', 'Paperless-ngx', 'https://docs.paperless-ngx.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/paperless-ngx/paperless-ngx/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

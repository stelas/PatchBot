<?php

class Vaultwarden extends PatchBase {
	function __construct() {
		parent::__construct('Daniel García', 'Vaultwarden', 'https://github.com/dani-garcia/vaultwarden');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/dani-garcia/vaultwarden/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class VaultwardenWeb extends PatchBase {
	function __construct() {
		parent::__construct('Daniel García', 'Vaultwarden', 'https://github.com/dani-garcia/bw_web_builds');
		$this->patch->setBranch('Web Vault');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/dani-garcia/bw_web_builds/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

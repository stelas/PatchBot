<?php

class Electrum extends PatchBase {
	function __construct() {
		parent::__construct('Thomas Voegtlin', 'Electrum', 'https://electrum.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://electrum.org/version'))
			return $this->parse_json('version');
		return false;
	}
}

?>

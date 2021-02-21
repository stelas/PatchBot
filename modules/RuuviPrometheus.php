<?php

class RuuviPrometheus extends PatchBase {
	function __construct() {
		parent::__construct('Joonas Kuorilehto', 'ruuvi-prometheus', 'https://github.com/joneskoo/ruuvi-prometheus');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/joneskoo/ruuvi-prometheus/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

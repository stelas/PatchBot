<?php

class Loki extends PatchBase {
	function __construct() {
		parent::__construct('Grafana Labs', 'Loki', 'https://grafana.com/loki');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/grafana/loki/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

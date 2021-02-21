<?php

class Prometheus extends PatchBase {
	function __construct() {
		parent::__construct('Prometheus Authors', 'Prometheus', 'https://prometheus.io/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/prometheus/prometheus/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

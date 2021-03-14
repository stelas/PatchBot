<?php

class PrometheusNodeExporter extends PatchBase {
	function __construct() {
		parent::__construct('Prometheus Authors', 'Prometheus', 'https://prometheus.io/download/');
		$this->patch->setBranch('Node Exporter');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/prometheus/node_exporter/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

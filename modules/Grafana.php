<?php

class Grafana extends PatchBase {
	function __construct() {
		parent::__construct('Grafana Labs', 'Grafana', 'https://grafana.com/grafana/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/grafana/grafana/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Grafana extends PatchBase {
	function __construct() {
		parent::__construct('Grafana Labs', 'Grafana', 'https://grafana.com/grafana/download');
	}
	function check() : bool {
		if ($this->fetch('https://grafana.com/grafana/download'))
			return $this->parse('/selected="" value="([\d\.]+)"/');
		return false;
	}
}

?>

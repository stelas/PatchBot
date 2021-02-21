<?php

class Drone extends PatchBase {
	function __construct() {
		parent::__construct('Drone.IO', 'Drone', 'https://drone.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/drone/drone/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

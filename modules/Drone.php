<?php

class Drone extends PatchBase {
	function __construct() {
		parent::__construct('Drone.IO', 'Drone', 'https://drone.io/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/drone/drone/tags', true))
			return $this->parse_json('name');
		return false;
	}
}

?>

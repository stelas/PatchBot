<?php

class Containerlab extends PatchBase {
	function __construct() {
		parent::__construct('Nokia', 'Containerlab', 'https://containerlab.dev/install/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/srl-labs/containerlab/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

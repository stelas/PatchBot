<?php

class Pangolin extends PatchBase {
	function __construct() {
		parent::__construct('Fossorial Inc.', 'Pangolin', 'https://pangolin.net/downloads');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/fosrl/pangolin/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

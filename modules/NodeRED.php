<?php

class NodeRED extends PatchBase {
	function __construct() {
		parent::__construct('OpenJS Foundation', 'Node-RED', 'https://nodered.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/node-red/node-red/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

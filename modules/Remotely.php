<?php

class Remotely extends PatchBase {
	function __construct() {
		parent::__construct('Jared Goodwin', 'Remotely', 'https://github.com/immense/Remotely');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/immense/Remotely/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

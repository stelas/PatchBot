<?php

class HandBrake extends PatchBase {
	function __construct() {
		parent::__construct('HandBrake Team', 'HandBrake', 'https://handbrake.fr/downloads.php');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/HandBrake/HandBrake/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

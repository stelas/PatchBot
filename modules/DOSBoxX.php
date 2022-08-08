<?php

class DOSBoxX extends PatchBase {
	function __construct() {
		parent::__construct('Jonathan Campbell', 'DOSBox-X', 'https://dosbox-x.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/joncampbell123/dosbox-x/releases/latest'))
			return $this->parse_json('tag_name', '/-v(.+)$/');
		return false;
	}
}

?>

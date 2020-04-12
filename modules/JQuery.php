<?php

class JQuery extends PatchBase {
	function __construct() {
		parent::__construct('jQuery Foundation', 'jQuery', 'https://jquery.com/download/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/jquery/jquery/tags', true))
			return $this->parse_json('name');
		return false;
	}
}

?>

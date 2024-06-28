<?php

class JQuery extends PatchBase {
	function __construct() {
		parent::__construct('jQuery Foundation', 'jQuery', 'https://jquery.com/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/jquery/jquery/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

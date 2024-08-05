<?php

class Bruno extends PatchBase {
	function __construct() {
		parent::__construct('Anoop M D & Anusree P S', 'bruno', 'https://www.usebruno.com/downloads');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/usebruno/bruno/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

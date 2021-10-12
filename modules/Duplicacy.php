<?php

class Duplicacy extends PatchBase {
	function __construct() {
		parent::__construct('Acrosync LLC', 'Duplicacy', 'https://duplicacy.com/download.html');
		$this->patch->setBranch('CLI');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/gilbertchen/duplicacy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

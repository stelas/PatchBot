<?php

class Firebird extends PatchBase {
	function __construct() {
		parent::__construct('Firebird Foundation', 'Firebird', 'https://firebirdsql.org/en/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/FirebirdSQL/firebird/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

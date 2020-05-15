<?php

class MySQLWorkbench extends PatchBase {
	function __construct() {
		parent::__construct('Oracle', 'MySQL Workbench', 'https://dev.mysql.com/downloads/workbench/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/mysql/mysql-workbench/tags', true))
			return $this->parse_json('name');
		return false;
	}
}

?>

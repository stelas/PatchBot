<?php

class MySQLWorkbench extends PatchBase {
	function __construct() {
		parent::__construct('Oracle', 'MySQL Workbench', 'https://dev.mysql.com/downloads/workbench/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mysql/mysql-workbench/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>

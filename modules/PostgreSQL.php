<?php

class PostgreSQL extends PatchBase {
	function __construct() {
		parent::__construct('PostgreSQL Global Development Group', 'PostgreSQL', 'https://www.postgresql.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.postgresql.org/ftp/latest/', false))
			return $this->parse('/\/ftp\/source\/v([\d\.]+)/');
		return false;
	}
}

?>

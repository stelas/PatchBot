<?php

class PostgreSQL extends PatchBase {
	function __construct() {
		parent::__construct('PostgreSQL Global Development Group', 'PostgreSQL', 'https://www.postgresql.org/download/');
	}
	function check() : bool {
		if ($this->fetch_header('https://www.postgresql.org/ftp/latest/'))
			return $this->parse('/\/ftp\/source\/v([\d\.]+)/');
		return false;
	}
}

?>

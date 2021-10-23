<?php

class MariaDB106 extends PatchBase {
	function __construct() {
		parent::__construct('MariaDB Foundation', 'MariaDB', 'https://mariadb.org/download/');
		$this->patch->setBranch('10.6');
	}
	function check() : bool {
		if ($this->fetch_json('https://downloads.mariadb.org/rest-api/mariadb/10.6/'))
			return $this->parse_json('release_id');
		return false;
	}
}

?>

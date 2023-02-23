<?php

class MariaDB1011 extends PatchBase {
	function __construct() {
		parent::__construct('MariaDB Foundation', 'MariaDB', 'https://mariadb.org/download/');
		$this->patch->setBranch('10.11');
	}
	function check() : bool {
		if ($this->fetch_json('https://downloads.mariadb.org/rest-api/mariadb/10.11/'))
			return $this->parse_json('release_id');
		return false;
	}
}

?>

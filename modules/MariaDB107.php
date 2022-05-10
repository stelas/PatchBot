<?php

class MariaDB107 extends PatchBase {
	function __construct() {
		parent::__construct('MariaDB Foundation', 'MariaDB', 'https://mariadb.org/download/');
		$this->patch->setBranch('10.7');
	}
	function check() : bool {
		if ($this->fetch_json('https://downloads.mariadb.org/rest-api/mariadb/10.7/'))
			return $this->parse_json('release_id');
		return false;
	}
}

?>

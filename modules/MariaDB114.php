<?php

class MariaDB114 extends PatchBase {
	function __construct() {
		parent::__construct('MariaDB Foundation', 'MariaDB', 'https://mariadb.org/download/');
		$this->patch->setBranch('11.4');
	}
	function check() : bool {
		if ($this->fetch_json('https://downloads.mariadb.org/rest-api/mariadb/11.4/'))
			return $this->parse_json('release_id');
		return false;
	}
}

?>

<?php

class MariaDB106 extends PatchBase {
	function __construct() {
		parent::__construct('MariaDB Foundation', 'MariaDB', 'https://downloads.mariadb.org/mariadb/10.6/');
		$this->patch->setBranch('10.6');
	}
	function check() : bool {
		if ($this->fetch('https://downloads.mariadb.org/mariadb/10.6/'))
			return $this->parse('/MariaDB ([\d\.]+) Stable/');
		return false;
	}
}

?>

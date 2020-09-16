<?php

class MariaDB103 extends PatchBase {
	function __construct() {
		parent::__construct('MariaDB Foundation', 'MariaDB', 'https://downloads.mariadb.org/mariadb/10.3/');
		$this->patch->setBranch('10.3');
	}
	function check() : bool {
		if ($this->fetch('https://downloads.mariadb.com/MariaDB/mariadb-10.3/source/'))
			return $this->parse('/mariadb-([\d\.]+)\.tar\.gz/');
		return false;
	}
}

?>

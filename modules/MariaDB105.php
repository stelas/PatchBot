<?php

class MariaDB105 extends PatchBase {
	function __construct() {
		parent::__construct('MariaDB Foundation', 'MariaDB', 'https://downloads.mariadb.org/mariadb/10.5/');
		$this->patch->setBranch('10.5');
	}
	function check() : bool {
		if ($this->fetch('https://downloads.mariadb.com/MariaDB/mariadb-10.5/source/'))
			return $this->parse('/mariadb-([\d\.]+)\.tar\.gz/');
		return false;
	}
}

?>

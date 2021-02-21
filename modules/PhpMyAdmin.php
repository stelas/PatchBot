<?php

class PhpMyAdmin extends PatchBase {
	function __construct() {
		parent::__construct('phpMyAdmin Contributors', 'phpMyAdmin', 'https://www.phpmyadmin.net/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/phpmyadmin/phpmyadmin/releases/latest'))
			return $this->parse_json('name');
		return false;
	}
}

?>

<?php

class PhpMyAdmin extends PatchBase {
	function __construct() {
		parent::__construct('phpMyAdmin Contributors', 'phpMyAdmin', 'https://www.phpmyadmin.net/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/phpmyadmin/phpmyadmin/releases/latest', true))
			return $this->parse_json('name');
		return false;
	}
}

?>

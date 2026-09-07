<?php

class WordPress extends PatchBase {
	function __construct() {
		parent::__construct('WordPress Foundation', 'WordPress', 'https://wordpress.org/download/');
	}
	function check() : bool {
		if ($this->fetch_header('https://wordpress.org/latest.zip'))
			return $this->parse('/filename=wordpress-([\d\.]+)\.zip/');
		return false;
	}
}

?>

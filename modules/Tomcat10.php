<?php

class Tomcat10 extends PatchBase {
	function __construct() {
		parent::__construct('Apache Foundation', 'Tomcat', 'https://tomcat.apache.org/download-10.cgi');
		$this->patch->setBranch('10');
	}
	function check() : bool {
		if ($this->fetch('https://tomcat.apache.org/download-10.cgi'))
			return $this->parse('/id="([\d\.]+)"/');
		return false;
	}
}

?>

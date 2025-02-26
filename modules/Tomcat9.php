<?php

class Tomcat9 extends PatchBase {
	function __construct() {
		parent::__construct('Apache Foundation', 'Tomcat', 'https://tomcat.apache.org/download-90.cgi');
		$this->patch->setBranch('9');
	}
	function check() : bool {
		if ($this->fetch('https://tomcat.apache.org/download-90.cgi'))
			return $this->parse('/id="([\d\.]+)"/');
		return false;
	}
}

?>

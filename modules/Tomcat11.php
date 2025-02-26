<?php

class Tomcat11 extends PatchBase {
	function __construct() {
		parent::__construct('Apache Foundation', 'Tomcat', 'https://tomcat.apache.org/download-11.cgi');
		$this->patch->setBranch('11');
	}
	function check() : bool {
		if ($this->fetch('https://tomcat.apache.org/download-11.cgi'))
			return $this->parse('/id="([\d\.]+)"/');
		return false;
	}
}

?>

<?php

class AdoptOpenJDK14 extends PatchBase {
	function __construct() {
		parent::__construct('AdoptOpenJDK', 'OpenJDK', 'https://adoptopenjdk.net/');
		$this->patch->setBranch('JRE 14');
	}
	function check() : bool {
		if ($this->fetch('https://api.adoptopenjdk.net/v2/info/releases/openjdk14?release=latest&openjdk_impl=hotspot&type=jre&os=windows&arch=x64', true))
			return $this->parse_json('openjdk_version');
		return false;
	}
}

?>

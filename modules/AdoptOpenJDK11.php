<?php

class AdoptOpenJDK11 extends PatchBase {
	function __construct() {
		parent::__construct('AdoptOpenJDK', 'OpenJDK', 'https://adoptopenjdk.net/releases.html?variant=openjdk11&jvmVariant=hotspot');
		$this->patch->setBranch('JRE 11');
	}
	function check() : bool {
		if ($this->fetch('https://api.adoptopenjdk.net/v2/info/releases/openjdk11?release=latest&openjdk_impl=hotspot&type=jre&os=windows&arch=x64', true))
			return $this->parse_json('openjdk_version');
		return false;
	}
}

?>

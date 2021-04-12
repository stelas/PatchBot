<?php

class AdoptOpenJDK16 extends PatchBase {
	function __construct() {
		parent::__construct('AdoptOpenJDK', 'OpenJDK', 'https://adoptopenjdk.net/releases.html?variant=openjdk16&amp;jvmVariant=hotspot');
		$this->patch->setBranch('JRE 16');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.adoptopenjdk.net/v2/info/releases/openjdk16?release=latest&openjdk_impl=hotspot&type=jre&os=windows&arch=x64'))
			return $this->parse_json('openjdk_version');
		return false;
	}
}

?>

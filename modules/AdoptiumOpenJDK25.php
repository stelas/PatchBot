<?php

class AdoptiumOpenJDK25 extends PatchBase {
	function __construct() {
		parent::__construct('Eclipse Foundation', 'Adoptium OpenJDK', 'https://adoptium.net/de/temurin/releases/?version=25');
		$this->patch->setBranch('Temurin 25');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.adoptium.net/v3/info/release_versions?heap_size=normal&image_type=jdk&page=0&page_size=10&project=jdk&release_type=ga&sort_method=DEFAULT&sort_order=DESC&vendor=adoptium&version=%5B25.0%2C25.1%29'))
			return $this->parse_json('openjdk_version');
		return false;
	}
}

?>

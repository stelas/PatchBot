<?php

class AlpineLinux extends PatchBase {
	function __construct() {
		parent::__construct('Alpine Linux Development Team', 'Alpine Linux', 'https://alpinelinux.org/');
	}
	function check() : bool {
		if ($this->fetch_yaml('https://alpine.global.ssl.fastly.net/alpine/latest-stable/releases/x86_64/latest-releases.yaml'))
			return $this->parse_yaml('version');
		return false;
	}
}

?>

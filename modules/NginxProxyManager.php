<?php

class NginxProxyManager extends PatchBase {
	function __construct() {
		parent::__construct('Jamie Curnow', 'Nginx Proxy Manager', 'https://nginxproxymanager.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/NginxProxyManager/nginx-proxy-manager/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

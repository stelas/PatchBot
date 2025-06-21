<?php

class DokuWiki extends PatchBase {
	function __construct() {
		parent::__construct('Andreas Gohr', 'DokuWiki', 'https://download.dokuwiki.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/dokuwiki/dokuwiki/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

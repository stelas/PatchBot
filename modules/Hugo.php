<?php

class Hugo extends PatchBase {
	function __construct() {
		parent::__construct('Hugo Authors', 'Hugo', 'https://gohugo.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/gohugoio/hugo/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

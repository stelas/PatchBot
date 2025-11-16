<?php

class Deno extends PatchBase {
	function __construct() {
		parent::__construct('Deno Land Inc.', 'Deno', 'https://deno.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/denoland/deno/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

<?php

class Autorestic extends PatchBase {
	function __construct() {
		parent::__construct('Niccolo Borgioli', 'autorestic', 'https://autorestic.vercel.app/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/cupcakearmy/autorestic/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

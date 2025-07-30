<?php

class Tubular extends PatchBase {
	function __construct() {
		parent::__construct('polymorphicshade', 'Tubular', 'https://f-droid.org/packages/org.polymorphicshade.tubular/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/polymorphicshade/Tubular/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>

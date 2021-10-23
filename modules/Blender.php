<?php

class Blender extends PatchBase {
	function __construct() {
		parent::__construct('Blender Foundation', 'Blender', 'https://www.blender.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.blender.org/download/'))
			return $this->parse('/Download Blender ([\d\.]+)( LTS)?/');
		return false;
	}
}

?>

<?php

class Blender extends PatchBase {
	function __construct() {
		parent::__construct('Blender Foundation', 'Blender', 'https://www.blender.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.blender.org/'))
			return $this->parse('/>Download Blender ([\d\.]+[a-z]?)</');
		return false;
	}
}

?>

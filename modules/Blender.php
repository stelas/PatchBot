<?php

class Blender extends PatchBase {
	function __construct() {
		parent::__construct('Blender Foundation', 'Blender', 'https://www.blender.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.blender.org/download/'))
			return $this->parse('_//www\.blender\.org/download/release/Blender[\d\.]+/blender-([\d\.]+)-windows-x64\.msi_');
		return false;
	}
}

?>

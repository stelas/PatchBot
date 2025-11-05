<?php

class Blender45 extends PatchBase {
	function __construct() {
		parent::__construct('Blender Foundation', 'Blender', 'https://www.blender.org/download/');
		$this->patch->setBranch('4.5');
	}
	function check() : bool {
		if ($this->fetch('https://download.blender.org/release/Blender4.5/'))
			return $this->parse('/>blender-([\d\.]+)\.sha256</', true);
		return false;
	}
}

?>

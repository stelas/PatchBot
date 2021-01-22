<?php

class Minidlna extends PatchBase {
	function __construct() {
		parent::__construct('Justin Maggard', 'ReadyMedia', 'https://sourceforge.net/projects/minidlna/files/');
	}
	function check() : bool {
		if ($this->fetch('https://sourceforge.net/projects/minidlna/files/latest/download'))
			return $this->parse('/<div class="file-name">\s*minidlna-([\d\.]+)\.tar\.gz\s*<\/div>/');
		return false;
	}
}

?>

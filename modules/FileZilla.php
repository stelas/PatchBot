<?php

class FileZilla extends PatchBase {
	function __construct() {
		parent::__construct('Tim Kosse', 'FileZilla', 'https://filezilla-project.org/download.php?show_all=1');
	}
	function check() : bool {
		if ($this->fetch('https://filezilla-project.org/download.php?show_all=1'))
			return $this->parse('/<p>The latest stable version of FileZilla Client is ([\d\.]+)<\/p>/');
		return false;
	}
}

?>

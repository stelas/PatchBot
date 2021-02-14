<?php

class TeamViewer extends PatchBase {
	function __construct() {
		parent::__construct('TeamViewer', 'TeamViewer', 'https://www.teamviewer.com/en/download/windows/');
	}
	function check() : bool {
		if ($this->fetch('https://www.teamviewer.com/en/download/windows/'))
			return $this->parse('/<p>Current version: ([\d\.]+)<\/p>/');
		return false;
	}
}

?>

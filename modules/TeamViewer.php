<?php

class TeamViewer extends PatchBase {
	function __construct() {
		parent::__construct('TeamViewer', 'TeamViewer', 'https://www.teamviewer.com/en/download/windows/');
	}
	function check() : bool {
		if ($this->fetch('https://www.teamviewer.com/en/download/portal/windows/'))
			return $this->parse('/<span data-dl-version-label>([\d\.]+)<\/span>/');
		return false;
	}
}

?>

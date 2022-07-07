<?php

class CitrixWorkspaceApp extends PatchBase {
	function __construct() {
		parent::__construct('Citrix', 'Workspace App', 'https://www.citrix.com/downloads/workspace-app/windows/workspace-app-for-windows-latest.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.citrix.com/downloads/workspace-app/windows/workspace-app-for-windows-latest.html'))
			return $this->parse('/<p>Version: ([\d\.]+) ?\([\d\.]+\)<\/p>/');
		return false;
	}
}

?>

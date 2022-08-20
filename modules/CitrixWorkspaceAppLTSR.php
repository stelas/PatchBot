<?php

class CitrixWorkspaceAppLTSR extends PatchBase {
	function __construct() {
		parent::__construct('Citrix', 'Workspace App', 'https://www.citrix.com/downloads/workspace-app/workspace-app-for-windows-long-term-service-release/');
		$this->patch->setBranch('LTSR');
	}
	function check() : bool {
		if ($this->fetch('https://www.citrix.com/downloads/workspace-app/workspace-app-for-windows-long-term-service-release/'))
			return $this->parse('/>Citrix Workspace app for Windows LTSR ([\d\.]+)</');
		return false;
	}
}

?>

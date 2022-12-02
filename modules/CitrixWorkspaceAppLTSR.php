<?php

class CitrixWorkspaceAppLTSR extends PatchBase {
	function __construct() {
		parent::__construct('Citrix', 'Workspace App', 'https://www.citrix.com/downloads/workspace-app/workspace-app-for-windows-long-term-service-release/workspace-app-for-windows-LTSR-Latest.html');
		$this->patch->setBranch('LTSR');
	}
	function check() : bool {
		if ($this->fetch('https://www.citrix.com/downloads/workspace-app/workspace-app-for-windows-long-term-service-release/workspace-app-for-windows-LTSR-Latest.html'))
			return $this->parse('/<p>Version: ([\d\.]+)<\/p>/');
		return false;
	}
}

?>

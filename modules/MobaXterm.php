<?php

class MobaXterm extends PatchBase {
	function __construct() {
		parent::__construct('Mobatek', 'MobaXterm', 'https://mobaxterm.mobatek.net/download-home-edition.html');
		$this->patch->setBranch('Home Edition');
	}
	function check() : bool {
		if ($this->fetch('https://mobaxterm.mobatek.net/download-home-edition.html'))
			return $this->parse('#//download\.mobatek\.net/[\d]+/MobaXterm_Installer_v([\d\.]+)\.zip#');
		return false;
	}
}

?>

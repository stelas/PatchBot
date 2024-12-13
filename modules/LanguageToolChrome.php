<?php

class LanguageToolChrome extends PatchBase {
	function __construct() {
		parent::__construct('LanguageTooler GmbH', 'Grammar and Spell Checker - LanguageTool', 'https://chromewebstore.google.com/detail/rechtschreibpr%C3%BCfung-%E2%80%93-lan/oldceeleldhonbafppcapldpdifcinji');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chromewebstore.google.com/detail/rechtschreibpr%C3%BCfung-%E2%80%93-lan/oldceeleldhonbafppcapldpdifcinji'))
			return $this->parse('/<div class="N3EXSc">([\d\.]+)<\/div>/');
		return false;
	}
}

?>

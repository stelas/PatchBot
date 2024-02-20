<?php

class LanguageToolFF extends PatchBase {
	function __construct() {
		parent::__construct('LanguageTooler GmbH', 'Grammar and Spell Checker - LanguageTool', 'https://addons.mozilla.org/en-US/firefox/addon/languagetool/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/languagetool/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>

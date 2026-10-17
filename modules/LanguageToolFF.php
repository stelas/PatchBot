<?php

class LanguageToolFF extends PatchBase {
	function __construct() {
		parent::__construct('LanguageTooler GmbH', 'Grammar and Spell Checker - LanguageTool', 'https://addons.mozilla.org/en-US/firefox/addon/languagetool/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/languagetool/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
